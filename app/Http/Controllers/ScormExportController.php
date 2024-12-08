<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use ZipArchive;
use Illuminate\Support\Facades\Storage;

class ScormExportController extends Controller
{
    public function export($courseId)
    {
        // Fetch course and related data
        $course = Course::with(['learningUnits', 'assets'])->findOrFail($courseId);

        // Prepare paths
        $scormPath = storage_path("app/public/scorm/{$course->id}");
        $zipPath = storage_path("app/public/scorm/{$course->id}.zip");

        try {
            // Generate the SCORM manifest
            $manifestContent = $this->generateManifest($course);

            // Prepare SCORM package directory
            if (!file_exists($scormPath)) {
                mkdir($scormPath, 0755, true);
            }

            // Write imsmanifest.xml
            file_put_contents("{$scormPath}/imsmanifest.xml", $manifestContent);

            // Generate dynamic content files (e.g., index.html)
            $this->generateDynamicFiles($course, $scormPath);

            // Add assets (videos, images, etc.)
            foreach ($course->assets as $asset) {
                $assetPath = "{$scormPath}/assets";
                if (!file_exists($assetPath)) {
                    mkdir($assetPath, 0755, true);
                }
                $sourcePath = storage_path("app/{$asset->path}");
                $destinationPath = "{$assetPath}/{$asset->filename}";

                if (!file_exists($sourcePath)) {
                    throw new \Exception("Asset not found: {$sourcePath}");
                }

                copy($sourcePath, $destinationPath);
            }

            // Create ZIP
            $zip = new ZipArchive();
            if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
                $this->addFolderToZip($scormPath, $zip);
                $zip->close();
            } else {
                throw new \Exception("Failed to create ZIP archive at {$zipPath}");
            }

            // Return the ZIP file for download
            return response()->download($zipPath, "scorm_package_{$course->id}.zip", [
                'Content-Type' => 'application/zip',
                'Content-Disposition' => 'attachment; filename="scorm_package_' . $course->id . '.zip"',
            ])->deleteFileAfterSend();
        } catch (\Exception $e) {
            // Cleanup on error
            Storage::deleteDirectory("public/scorm/{$course->id}");
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Generate the SCORM manifest file dynamically.
     */
    private function generateManifest($course)
    {
        $xml = new \SimpleXMLElement('<manifest/>');
        $xml->addAttribute('identifier', "course-{$course->id}");
        $xml->addAttribute('version', '1.2');

        // Metadata
        $metadata = $xml->addChild('metadata');
        $metadata->addChild('schema', 'ADL SCORM');
        $metadata->addChild('schemaversion', '1.2');

        // Organizations
        $organizations = $xml->addChild('organizations');
        $organization = $organizations->addChild('organization');
        $organization->addAttribute('identifier', 'default');

        // Add items
        foreach ($course->learningUnits as $unit) {
            $item = $organization->addChild('item');
            $item->addAttribute('identifier', "item-{$unit->id}");
            $item->addAttribute('identifierref', "resource-{$unit->id}");
            $item->addChild('title', $unit->title);
        }

        // Add resources
        $resources = $xml->addChild('resources');
        foreach ($course->learningUnits as $unit) {
            $resource = $resources->addChild('resource');
            $resource->addAttribute('identifier', "resource-{$unit->id}");
            $resource->addAttribute('type', 'webcontent');
            $resource->addAttribute('href', "unit-{$unit->id}.html");
        }

        return $xml->asXML();
    }

    /**
     * Generate dynamic content files (e.g., index.html).
     */
    private function generateDynamicFiles($course, $scormPath)
    {
        // Load SCORM index template
        $templatePath = resource_path('scorm/index.html');
        if (!file_exists($templatePath)) {
            throw new \Exception("SCORM template file missing: {$templatePath}");
        }

        $templateContent = file_get_contents($templatePath);

        // Replace placeholders with dynamic content
        $templateContent = str_replace('{{ course_title }}', $course->title, $templateContent);
        $templateContent = str_replace('{{ course_description }}', $course->description, $templateContent);
        $templateContent = str_replace('{{ learning_units }}', json_encode($course->learningUnits), $templateContent);

        // Write the modified template to the SCORM directory
        file_put_contents("{$scormPath}/index.html", $templateContent);

        // Copy API.js for SCORM tracking
        $apiPath = resource_path('scorm/API.js');
        if (!file_exists($apiPath)) {
            throw new \Exception("SCORM API.js file missing: {$apiPath}");
        }
        copy($apiPath, "{$scormPath}/API.js");
    }

    /**
     * Add a folder and its contents to a ZIP archive.
     */
    private function addFolderToZip($folder, $zip, $parentFolder = '')
    {
        $files = scandir($folder);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            $filePath = "{$folder}/{$file}";
            if (is_dir($filePath)) {
                $this->addFolderToZip($filePath, $zip, "{$parentFolder}{$file}/");
            } else {
                $zip->addFile($filePath, "{$parentFolder}{$file}");
            }
        }
    }
}

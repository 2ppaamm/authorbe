<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseStyle;

class CourseStyleController extends Controller
{
    // Display all styles
    public function index($courseId)
    {
        $styles = CourseStyle::where('course_id', $courseId)->get();
        return response()->json($styles);
    }

    public function show($courseId)
    {
        $courseStyle = CourseStyle::where('course_id', $courseId)->first();

        if (!$courseStyle) {
            return response()->json(['message' => 'Course style not found'], 404);
        }

        return response()->json($courseStyle);
    }

    // Create a new style
    public function store(Request $request, $courseId)
    {
        $validatedData = $request->validate([
            'primary_color' => 'required|string',
            'secondary_color' => 'required|string',
            'supporting_color_1' => 'required|string',
            'supporting_color_2' => 'required|string',
        ]);

        $style = CourseStyle::create(array_merge($validatedData, ['course_id' => $courseId]));

        return response()->json(['message' => 'Course style created successfully.', 'data' => $style]);
    }

    // Update an existing style
    public function update(Request $request, $courseId)
    {
        $validatedData = $request->validate([
            'primary_color' => 'nullable|string',
            'secondary_color' => 'nullable|string',
            'supporting_color_1' => 'nullable|string',
            'supporting_color_2' => 'nullable|string',
            'category' => 'sometimes|string|max:255', 
        ]);// Add this line
        $courseStyle = CourseStyle::updateOrCreate(
            ['course_id' => $courseId],
            $validatedData
        );
    return response()->json(['message' => 'Course style updated successfully']);

    }

    // Delete a style
    public function destroy($courseId)
    {
        $style = CourseStyle::where('course_id', $courseId)->first();
        if (!$style) {
            return response()->json(['message' => 'Course style not found.'], 404);
        }

        $style->delete();
        return response()->json(['message' => 'Course style deleted successfully.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LearningUnit;

class CourseController extends Controller
{
    // Get all courses
    public function index()
    {
        return Course::with('user', 'contentBlocks', 'learningUnits')->get();
    }

    // Create a new course
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $course = Course::create($validated);
        return response()->json($course, 201);
    }

    // Method to fetch course details by ID
    public function show($id)
    {
        $course = Course::with('learningUnits')->findOrFail($id);

        // Check if the authenticated user is the owner of the course
        if ($course->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return response()->json($course);  // Return course data as JSON
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'numUnits' => 'nullable|integer',
        ]);

        $course = Course::findOrFail($id);

        // Check if the authenticated user is the owner of the course
        if ($course->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Update the course with validated data
        $course->update($request->all());

        return response()->json($course);  // Return updated course data
    }
    // Delete a course
    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json(['message' => 'Course deleted'], 200);
    }

    public function getUserCourses(Request $request)
    {
        $user = $request->user();
        
        $courses = $user->courses()->withCount('learningUnits')->get()->map(function ($course) {
            return [
                'id' => $course->id,
                'title' => $course->title,
                'description' => $course->description,
                'author_name' => $course->author->name ?? 'Unknown Author',
                'course_type' => $course->is_microlearning ? 'microlearning' : 'course',
                'learning_units_count' => $course->learning_units_count,
                'last_updated' => $course->updated_at->format('Y-m-d'),
                'thumbnail' => $course->thumbnail_url ?? null,
            ];
        });

        return response()->json($user->courses()->withCount('learningUnits')->get());
    }

    public function updateLearningUnitOrder(Request $request, $courseId)
    {
        // Validate the incoming order
        $validated = $request->validate([
            'learning_units' => 'required|array',
            'learning_units.*.id' => 'required|integer|exists:learning_units,id',
            'learning_units.*.order' => 'required|integer',
        ]);
        // Loop through the learning units and update their order in the database
        foreach ($validated['learning_units'] as $unitData) {
            $unit = LearningUnit::find($unitData['id']);
            if ($unit) {
                $unit->order = $unitData['order'];
                $unit->save();
            }
        }

        // Return the updated course with learning units sorted by order
        $course = Course::with('learningUnits')->find($courseId);
        return response()->json($course);
    }


}
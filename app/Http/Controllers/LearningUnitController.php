<?php

namespace App\Http\Controllers;

use App\Models\LearningUnit;
use Illuminate\Http\Request;
use App\Models\Course;

class LearningUnitController extends Controller
{
    public function index()
    {
        return LearningUnit::with('course')->get();
    }

    public function store(Request $request, $courseId)
    {
         // Validate the input data (title and description are required, order is optional)
        $validated = $request->validate([
             'title' => 'required|string'
        ]);

        // Ensure the course exists
        $course = Course::findOrFail($courseId);

        // Calculate the next available order number based on existing learning units for this course
        $nextOrder = LearningUnit::where('course_id', $courseId)->max('order') + 1;

        // Generate the LU_code as LU followed by the next order number
        $LU_code = 'LU' . $nextOrder;

        // Create the new learning unit with the calculated order and LU_code
        $learningUnit = LearningUnit::create([
            'course_id' => $courseId, 
            'title' => $validated['title'] ?? '',  // Default             
            'description' => $validated['description'] ?? $validated['title'],  // Default to empty string if not provided
            'order' => $nextOrder,
            'LU_code' => $LU_code,
        ]);

        // Return the created learning unit
        return response()->json($learningUnit, 201);
    }

    public function show(LearningUnit $learningUnit)
    {
        return $learningUnit->load('course');
    }

    public function update(Request $request, LearningUnit $learningUnit)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $learningUnit->update($validated);
        return response()->json($learningUnit, 200);
    }

    public function destroy($courseId, LearningUnit $learningUnit)
    {
        // Get the order of the learning unit being deleted
        $deletedUnitOrder = $learningUnit->order;

        // Delete the learning unit
        $learningUnit->delete();

        // Get all learning units for the course, ordered by their `order` value
        $learningUnits = LearningUnit::where('course_id', $courseId)
                                     ->orderBy('order')
                                     ->get();

        // Recalculate and update the LU_code and order for remaining units
        foreach ($learningUnits as $index => $unit) {
            // Update the order and LU_code after the deletion
            $unit->order = $index + 1;
            $unit->LU_code = 'LU' . ($index + 1);
            $unit->save();
        }

        return response()->json(['message' => 'Learning Unit deleted successfully and order updated'], 200);
    }

}

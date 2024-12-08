<?php

namespace App\Http\Controllers;

use App\Models\StudentResult;
use Illuminate\Http\Request;

class StudentResultController extends Controller
{
    public function index()
    {
        return StudentResult::with(['user', 'course'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'question_id' => 'nullable|exists:questions,id',
            'score' => 'required|numeric|min:0',
        ]);

        $result = StudentResult::create($validated);
        return response()->json($result, 201);
    }

    public function show(StudentResult $studentResult)
    {
        return $studentResult->load(['user', 'course']);
    }

    public function update(Request $request, StudentResult $studentResult)
    {
        $validated = $request->validate([
            'score' => 'required|numeric|min:0',
        ]);

        $studentResult->update($validated);
        return response()->json($studentResult, 200);
    }

    public function destroy(StudentResult $studentResult)
    {
        $studentResult->delete();
        return response()->json(['message' => 'Result deleted successfully'], 200);
    }
}

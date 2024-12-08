<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return Question::with('learningOutcome')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'learning_outcome_id' => 'required|exists:learning_outcomes,id',
            'question_type' => 'required|string|in:mcq,true_false,short_answer',
            'question_text' => 'required|string',
            'options' => 'nullable|json',
            'correct_answer' => 'required|json',
        ]);

        $question = Question::create($validated);
        return response()->json($question, 201);
    }

    public function show(Question $question)
    {
        return $question->load('learningOutcome');
    }

    public function update(Request $request, Question $question)
    {
        $validated = $request->validate([
            'question_text' => 'required|string',
            'options' => 'nullable|json',
            'correct_answer' => 'required|json',
        ]);

        $question->update($validated);
        return response()->json($question, 200);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json(['message' => 'Question deleted successfully'], 200);
    }
}

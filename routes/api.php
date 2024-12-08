<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ScormExportController;
use App\Http\Controllers\LearningUnitController;
use App\Http\Controllers\CourseStyleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Login Route: Public
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('Access Token')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
});

// Logout and Protected Routes
Route::middleware(['auth:api', 'throttle:60,1'])->group(function () {
    // Fetch Authenticated User
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Course Management Routes
    Route::resource('courses', CourseController::class);

      // Route to update the order of learning units
    Route::put('courses/{course}/update-order', [CourseController::class, 'updateLearningUnitOrder']);
    // Learning Units - nested under courses
    Route::prefix('courses/{courseId}')->group(function () {
        Route::get('course_style', [CourseStyleController::class, 'index']);
        Route::post('course_style', [CourseStyleController::class, 'store']);
        Route::put('course_style', [CourseStyleController::class, 'update']); // Custom PUT route
    });

    Route::prefix('courses/{courseId}')->group(function () {
        Route::apiResource('learning-units', LearningUnitController::class);  // Handles CRUD operations for learning units
    });
    // Logout User
    Route::post('/logout', function (Request $request) {
        $request->user()->token()->revoke();

        return response()->json(['message' => 'Successfully logged out']);
    });
});

Route::get('/scorm/export/{courseId}', [ScormExportController::class, 'export'])->middleware('auth:api');

Route::middleware('auth:api')->get('/user/courses', [CourseController::class, 'getUserCourses']);

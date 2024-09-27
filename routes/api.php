<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\RegisterApiController;

// Register route
Route::post('/register', action: [RegisterApiController::class, 'register']);

// Login route
Route::post('/login', [RegisterApiController::class, 'login']);

// Logout route (protected with Sanctum)
Route::middleware('auth:sanctum')->post('/logout', [RegisterApiController::class, 'logout']);

// Protected route (example)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

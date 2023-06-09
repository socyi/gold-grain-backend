<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Get a post by ID
Route::get('/posts/{id}', [PostController::class, 'view']);

// Create a post
Route::post('/posts', [PostController::class, 'createPost']);

// Update a post
Route::put('/posts/{id}', [PostController::class, 'update']);

// Delete a post
Route::delete('/posts/{id}', [PostController::class, 'delete']);

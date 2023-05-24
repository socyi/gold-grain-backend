<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/postlist', [PostListController::class, 'index'])->name('postlist');
    Route::get('/create-post', [PostController::class, 'index'])->name('create-post');
    Route::post('/create-post', [PostController::class, 'createPost'])->name('create-post');
    Route::get('/posts/{id}', [PostController::class, 'view'])->name('view-post');
    Route::delete('/delete-post/{post}', [PostController::class, 'delete'])->name('delete-post');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('edit-post');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('update-post');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

});


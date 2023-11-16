<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ApiPostController;

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');


Route::get('/api/posts', [ApiPostController::class, 'index']);
Route::get('/api/posts/{id}', [ApiPostController::class, 'show']);
Route::get('/api/posts/search/{keyword}', [ApiPostController::class, 'search']);
Route::put('/api/posts/{id}', [ApiPostController::class, 'update']);

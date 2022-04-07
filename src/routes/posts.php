<?php

use Illuminate\Support\Facades\Route;
use Poring931\Posts\Http\Controllers\PostController;


//Route::get('/posts', function () {
//   return view('posts::index');
//});

// Route::get('/posts',[\Poring931\Posts\Http\Controllers\PostController::class, 'index']);
// Route::get('/posts',[\Poring931\Posts\Http\Controllers\PostController::class, 'index']);

Route::resource('posts', PostController::class);

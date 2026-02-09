<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('posts/newPost', [PostController::class, 'newPost']);

Route::get('posts/editPost/{id}', [PostController::class, 'editPost']);


Route::resource('posts', PostController::class);


Route::get('/posts/{id}', [PostController::class, 'show'])
->name('post.show')
->where('id', "[0-9]+");


Route::get('/', function () {
    return view('start');
})->name('home');



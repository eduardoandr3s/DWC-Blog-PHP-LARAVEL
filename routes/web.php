<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\LoginController;

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('posts/newPost', [PostController::class, 'newPost']);

Route::get('posts/editPost/{id}', [PostController::class, 'editPost']);


Route::resource('posts', PostController::class);


Route::get('/posts/{id}', [PostController::class, 'show'])
->name('post.show')
->where('id', "[0-9]+");


Route::resource('englishes', EnglishController::class);

Route::get('/', function () {
    return view('start');
})->name('home');



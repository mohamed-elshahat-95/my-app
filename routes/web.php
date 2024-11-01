<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PostsController;

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PostsController::class, 'posts'])->name('posts');
    Route::get('/add', [PostsController::class, 'add']);
    Route::post('/create', [PostsController::class, 'create']);
    Route::get('/view/{id}', [PostsController::class, 'view']);
    Route::get('/edit/{id}', [PostsController::class, 'edit']);
    Route::post('/update/{id}', [PostsController::class, 'update']);
    Route::get('/delete/{id}', [PostsController::class, 'delete']);

});
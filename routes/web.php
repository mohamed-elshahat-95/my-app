<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PostsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostsController::class, 'posts']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\API\ApiPostsController;

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);

Route::group(['prefix' => 'posts', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/', [ApiPostsController::class, 'getPosts']);
    Route::get('{post_id}', [ApiPostsController::class, 'showPost']);
    Route::post('/create', [ApiPostsController::class, 'createPost']);
    Route::post('/{post_id}/upload-image', [ApiPostsController::class, 'uploadImage']);
});



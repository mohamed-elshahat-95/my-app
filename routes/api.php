<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostsController;

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

Route::post('/register', [ApiController::class, 'register']);
Route::post('/login', [ApiController::class, 'login']);

Route::group(['prefix' => 'posts', 'middleware' => ['auth:sanctum']], function () {
    Route::get('/', [PostsController::class, 'getPosts']);
    Route::get('{post_id}', [PostsController::class, 'showPost']);
    Route::post('/create', [PostsController::class, 'createPost']);
    Route::post('/{post_id}/upload-image', [PostsController::class, 'uploadImage']);
});



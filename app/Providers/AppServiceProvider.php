<?php

namespace App\Providers;

use App\Services\PostsServices\Classes\CreatePostService;
use App\Services\PostsServices\Classes\DeletePostService;
use App\Services\PostsServices\Classes\GetOnePostService;
use App\Services\PostsServices\Classes\GetPostsService;
use App\Services\PostsServices\Classes\UpdatePostService;

use App\Services\PostsServices\Interfaces\ICreatePostService;
use App\Services\PostsServices\Interfaces\IDeletePostService;
use App\Services\PostsServices\Interfaces\IGetOnePostService;
use App\Services\PostsServices\Interfaces\IGetPostsService;
use App\Services\PostsServices\Interfaces\IUpdatePostService;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton(ICreatePostService::class, CreatePostService::class);
        $this->app->singleton(IDeletePostService::class, DeletePostService::class);
        $this->app->singleton(IGetOnePostService::class, GetOnePostService::class);
        $this->app->singleton(IGetPostsService::class, GetPostsService::class);
        $this->app->singleton(IUpdatePostService::class, UpdatePostService::class);
    }
}

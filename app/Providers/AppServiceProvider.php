<?php

namespace App\Providers;

use App\Services\Classes\CreatePostService;
use App\Services\Classes\DeletePostService;
use App\Services\Classes\GetOnePostService;
use App\Services\Classes\GetPostsService;
use App\Services\Classes\UpdatePostService;

use App\Services\Interfaces\ICreatePostService;
use App\Services\Interfaces\IDeletePostService;
use App\Services\Interfaces\IGetOnePostService;
use App\Services\Interfaces\IGetPostsService;
use App\Services\Interfaces\IUpdatePostService;


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

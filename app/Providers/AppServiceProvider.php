<?php

namespace App\Providers;

use App\Services\Classes\PostsService;
use App\Services\Interfaces\IPostsService;
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
        $this->app->singleton(IPostsService::class, PostsService::class);
    }
}

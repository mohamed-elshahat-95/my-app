<?php

namespace App\Services\PostsServices\Classes;

use App\Services\PostsServices\Interfaces\IGetPostsService;
use App\Models\Posts;

class GetPostsService implements IGetPostsService
{
    public function getAllPosts() {
        return Posts::all();
    }
}

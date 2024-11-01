<?php

namespace App\Services\Classes;

use App\Services\Interfaces\IGetPostsService;
use App\Models\Posts;

class GetPostsService implements IGetPostsService
{
    public function getAllPosts() {
        return Posts::all();
    }
}

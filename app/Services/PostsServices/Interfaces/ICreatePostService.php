<?php

namespace App\Services\PostsServices\Interfaces;

use App\DTO\PostDTO;

interface ICreatePostService
{
    public function createPost(PostDTO $postDTO);
}

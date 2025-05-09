<?php

namespace App\Services\PostsServices\Classes;

use App\Services\PostsServices\Interfaces\ICreatePostService;
use App\DTO\PostDTO;
use App\Models\Posts;

class CreatePostService implements ICreatePostService
{
    public function createPost(PostDTO $postDTO)
    {
        Posts::create([
            'title' => $postDTO->title,
            'description' => $postDTO->description,
            'contact_phone_number' => $postDTO->contact_phone_number,
        ]);
        return true;
    }
}

<?php

namespace App\Services\Interfaces;

use App\DTO\PostDTO;

interface ICreatePostService
{
    public function createPost(PostDTO $postDTO);
}

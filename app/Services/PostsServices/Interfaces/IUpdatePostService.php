<?php

namespace App\Services\PostsServices\Interfaces;

use App\DTO\PostDTO;

interface IUpdatePostService
{
    public function updatePost(PostDTO $postDTO, $id);
}

<?php

namespace App\Services\Interfaces;

use App\DTO\PostDTO;

interface IUpdatePostService
{
    public function updatePost(PostDTO $postDTO, $id);
}

<?php

namespace App\Services\Classes;

use App\Services\Interfaces\IUpdatePostService;
use App\DTO\PostDTO;
use App\Models\Posts;

class UpdatePostService implements IUpdatePostService
{
    public function updatePost(PostDTO $postDTO, $id)
    {
        Posts::where('id', $id)->update([
            'title' => $postDTO->title,
            'description' => $postDTO->description,
            'contact_phone_number' => $postDTO->contact_phone_number,
        ]);
        return true;
    }
}

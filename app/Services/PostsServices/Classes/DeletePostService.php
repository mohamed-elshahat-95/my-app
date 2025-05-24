<?php

namespace App\Services\PostsServices\Classes;

use App\Services\PostsServices\Interfaces\IDeletePostService;
use App\Models\Posts;

class DeletePostService implements IDeletePostService
{
    public function deletePostByID($id) {
        Posts::where('id', $id)->delete();
        return true;
    }
}

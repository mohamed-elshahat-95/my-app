<?php

namespace App\Services\Classes;

use App\Services\Interfaces\IGetOnePostService;
use App\Exceptions\PostNotFountException;
use App\Models\Posts;

class GetOnePostService implements IGetOnePostService
{
    public function getPostByID($id) {
        $post = Posts::find($id);
        if (!$post) throw new PostNotFountException();
        return $post;
    }
}

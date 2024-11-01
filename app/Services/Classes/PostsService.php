<?php

namespace App\Services\Classes;

use App\DTO\PostDTO;
use App\Exceptions\PostNotFountException;
use App\Services\Interfaces\IPostsService;
use App\Models\Posts;

class PostsService implements IPostsService
{
    public function getAllPosts() {
        return Posts::all();
    }

    public function getPostByID($id) {
        $post = Posts::find($id);
        if (!$post) throw new PostNotFountException;
        return $post;
    }

    public function createPost(PostDTO $postDTO)
    {
        Posts::create([
            'title' => $postDTO->title,
            'description' => $postDTO->description,
            'contact_phone_number' => $postDTO->contact_phone_number,
        ]);
        return true;
    }

    public function updatePost(PostDTO $postDTO, $id)
    {
        Posts::where('id', $id)->update([
            'title' => $postDTO->title,
            'description' => $postDTO->description,
            'contact_phone_number' => $postDTO->contact_phone_number,
        ]);
        return true;
    }

    public function deletePostByID($id) {
        Posts::where('id', $id)->delete();
        return true;
    }
}

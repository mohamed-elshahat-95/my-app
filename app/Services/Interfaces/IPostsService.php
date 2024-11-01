<?php

namespace App\Services\Interfaces;
use App\DTO\PostDTO;
interface IPostsService
{
    public function getAllPosts();
    public function getPostByID($id);
    public function createPost(PostDTO $postDTO);
    public function updatePost(PostDTO $postDTO, $id);
    public function deletePostByID($id);
}

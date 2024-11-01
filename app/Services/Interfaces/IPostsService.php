<?php

namespace App\Services\Interfaces;
use Illuminate\Http\Request;

interface IPostsService
{
    public function getAllPosts();
    public function getPostByID($id);
    public function createPost(Request $request);
    public function updatePost(Request $request, $id);
    public function deletePostByID($id);
}

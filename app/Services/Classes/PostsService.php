<?php

namespace App\Services\Classes;

use App\Services\Interfaces\IPostsService;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostsService implements IPostsService
{
    public function getAllPosts() {
        return Posts::all();
    }

    public function getPostByID($id) {
        return Posts::find($id);
    }

    public function createPost(Request $request)
    {
        Posts::create($request->except('_token'));
        return true;
    }

    public function updatePost(Request $request, $id)
    {
        Posts::where('id', $id)->update($request->except('_token'));
        return true;
    }

    public function deletePostByID($id) {
        Posts::where('id', $id)->delete();
        return true;
    }
}

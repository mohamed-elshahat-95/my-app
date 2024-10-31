<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Posts;

class PostsController extends Controller
{
    public function posts()
    {
        $posts = Posts::all();
        return view('crm.posts.index', compact('posts'));
    }
}

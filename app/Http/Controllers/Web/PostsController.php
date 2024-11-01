<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\IPostsService;

class PostsController extends Controller
{
    public function __construct(private readonly IPostsService $postsService) {}

    public function posts()
    {
        $posts = $this->postsService->getAllPosts();
        return view('crm.posts.index', compact('posts'));
    }

    public function add()
    {
        return view('crm.posts.add');
    }

    public function create(Request $request)
    {
        $this->postsService->createPost($request);
        return to_route('posts');
    }

    public function view($id)
    {
        $post = $this->postsService->getPostByID($id);
        return view('crm.posts.view', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->postsService->getPostByID($id);
        return view('crm.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->postsService->updatePost($request, $id);
        return to_route('posts');
    }

    public function delete($id)
    {
        $this->postsService->deletePostByID($id);
        return response()->json(true);
    }
}

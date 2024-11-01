<?php

namespace App\Http\Controllers\Web;

use App\DTO\PostDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
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

    public function create(CreatePostRequest $request)
    {
        $postDTO = new PostDTO($request->input('title'), $request->input('description'), $request->input('contact_phone_number'));
        $this->postsService->createPost($postDTO);
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

    public function update(UpdatePostRequest $request, $id)
    {
        $postDTO = new PostDTO($request->input('title'), $request->input('description'), $request->input('contact_phone_number'));
        $this->postsService->updatePost($postDTO, $id);
        return to_route('posts');
    }

    public function delete($id)
    {
        $this->postsService->deletePostByID($id);
        return response()->json(true);
    }
}

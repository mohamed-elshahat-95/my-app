<?php

namespace App\Http\Controllers\Web;

use App\DTO\PostDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Posts;
use App\Services\CustomersServices\Classes\CustomerClass;
use App\Services\PostsServices\Interfaces\ICreatePostService;
use App\Services\PostsServices\Interfaces\IDeletePostService;
use App\Services\PostsServices\Interfaces\IGetOnePostService;
use App\Services\PostsServices\Interfaces\IGetPostsService;
use App\Services\PostsServices\Interfaces\IUpdatePostService;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function __construct(
        private readonly ICreatePostService $createPostService,
        private readonly IDeletePostService $deletePostService,
        private readonly IGetOnePostService $getOnePostService,
        private readonly IGetPostsService $getPostsService,
        private readonly IUpdatePostService $updatePostService
    ) {}

    public function posts()
    {
        $posts = $this->getPostsService->getAllPosts();
        return view('crm.posts.index', compact('posts'));
    }

    public function add()
    {
        return view('crm.posts.add');
    }

    public function create(CreatePostRequest $request)
    {
        $postDTO = new PostDTO($request->input('title'), $request->input('description'), $request->input('contact_phone_number'));
        $this->createPostService->createPost($postDTO);
        return to_route('posts');
    }

    public function view($id)
    {
        $post = $this->getOnePostService->getPostByID($id);
        return view('crm.posts.view', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->getOnePostService->getPostByID($id);
        return view('crm.posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $postDTO = new PostDTO($request->input('title'), $request->input('description'), $request->input('contact_phone_number'));
        $this->updatePostService->updatePost($postDTO, $id);
        return to_route('posts');
    }

    public function delete($id)
    {
        $this->deletePostService->deletePostByID($id);
        return response()->json(true);
    }

    public function test()
    {
        // $posts = Posts::whereIn('id', range(1, 10000))->get();
        // $posts = Posts::find(range(1, 10000));

        // Call welcome statically
        // return CustomerClass::welcome();

        // Call welcome using instance from class
        // $customerClassOBJ = new CustomerClass();
        // return $customerClassOBJ->welcome();

        // Stored Procedures
        // $contact_phone_number = '435-371-3362';
        // $post = DB::select("call getPostByContactPhoneNumber('$contact_phone_number')");
        // dd($post);

        // $allPosts = DB::select("call getAllPosts()");
        // dd($allPosts);
    }
}

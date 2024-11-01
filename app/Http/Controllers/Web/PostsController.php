<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function posts()
    {
        $posts = Posts::all();
        return view('crm.posts.index', compact('posts'));
    }

    public function add()
    {
        return view('crm.posts.add');
    }

    public function create(Request $request)
    {
        Posts::create($request->except('_token'));
        return to_route('posts');
    }

    public function view($id)
    {
        $post = Posts::find($id);
        return view('crm.posts.view', compact('post'));
    }

    public function edit($id)
    {
        $post = Posts::find($id);
        return view('crm.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        Posts::where('id', $id)->update($request->except('_token'));
        return to_route('posts');
    }

    public function delete($id)
    {
        Posts::where('id', $id)->delete();
        return response()->json(true);
    }
}

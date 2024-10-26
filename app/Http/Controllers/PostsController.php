<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create',compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'title'=>'required|string',
            'description'=>'required|string',
            'category_id'=>'required|numeric'
        ]);

        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }
    public function edit(Post $post)
    {   
        $categories = Category::all();
        return view('post.edit',compact('post','categories'));
    }
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer'
        ]);
        $post->update($data);
        return view('post.show', compact('post'));
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}

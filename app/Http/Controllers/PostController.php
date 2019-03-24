<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index')->with('posts', Post::paginate());
    }

    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }
}

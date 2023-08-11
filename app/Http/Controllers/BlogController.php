<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('blog.view', compact('post'));
    }
}

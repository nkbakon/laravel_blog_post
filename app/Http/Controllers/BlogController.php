<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Livewire\WithPagination;

class BlogController extends Controller
{
    use WithPagination;

    public $perPage = 5;

    public function index()
    {
        $posts = Post::paginate($this->perPage);
        
        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('blog.view', compact('post'));
    }
}

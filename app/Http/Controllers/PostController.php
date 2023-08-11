<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {        
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

}

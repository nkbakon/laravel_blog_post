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

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function destroy(Request $request)
    {
        $post = Post::find($request->data_id);
        if($post)
        {
            $post->delete();
            return redirect()->route('posts.index')->with('delete', 'Post deleted successfully.');
        }
        else
        {
            return redirect()->route('posts.index')->with('delete', 'No Post found!.');
        }    
    }

}

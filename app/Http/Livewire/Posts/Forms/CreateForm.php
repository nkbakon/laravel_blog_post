<?php

namespace App\Http\Livewire\Posts\Forms;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {   
        $validatedData = $this->validate($this->rules);
        $data['title'] = $this->title;
        $data['content'] = $this->content;
        $data['add_by'] = Auth::user()->id;   

        $post = Post::create($data);
        if($post){
            return redirect()->route('posts.index')->with('status', 'Post created successfully.');  
        }
        return redirect()->route('posts.index')->with('delete', 'Post create faild, try again.');       
        
    }

    public function render()
    {
        return view('posts.components.create-form');
    }
}


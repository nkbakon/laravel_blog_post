<?php

namespace App\Http\Livewire\Posts\Forms;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class EditForm extends Component
{
    public $post;

    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules());
    }

    public function mount($post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function update()
    {
        $validatedData = $this->validate($this->rules());
        $data['title'] = $this->title;
        $data['content'] = $this->content;
        $data['edit_by'] = Auth::user()->id;
        
        $this->post->update($data);        
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function render()
    {
        return view('posts.components.edit-form');
    }
}



<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PersonalTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = false;

    public function render()
    {
        $user = Auth::user()->id;
        $query = Post::query();

        if ($user) {
            $query->where('add_by', $user);
        }

        $posts = $query->where(function ($query) {
            $query->where('id', 'like', '%' . $this->search . '%')
                ->orWhereHas('addby', function($query) {
                    $query->where('username', 'like', '%' . $this->search . '%');
                })
                ->orWhere('created_at', 'like', '%' . $this->search . '%')
                ->orWhere('title', 'like', '%' . $this->search . '%');
        })
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage);

        return view('posts.components.personal-table', [
            'posts' => $posts
        ]);
    }
}

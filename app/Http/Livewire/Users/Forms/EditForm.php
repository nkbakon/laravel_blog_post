<?php

namespace App\Http\Livewire\Users\Forms;

use Livewire\Component;
use App\Models\User;

class EditForm extends Component
{
    public $user;

    public function rules()
    {
        return [
            'user.fname' => 'required',
            'user.lname' => 'required',
            'user.username' => 'required|unique:users,username,' . $this->user->id,
            'user.email' => 'required|unique:users,email,' . $this->user->id,
            'user.type' => 'required',
            'user.status' => 'required',
        ];
    }

    public function update()
    {
        $validatedData = $this->validate($this->rules());
        $data['fname'] = $validatedData['user']['fname'];
        $data['lname'] = $validatedData['user']['lname'];
        $data['username'] = $validatedData['user']['username'];
        $data['email'] = $validatedData['user']['email'];
        $data['type'] = $validatedData['user']['type'];
        $data['status'] = $validatedData['user']['status'];

        
        $this->user->update($data);        
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function render()
    {
        return view('users.components.edit-form');
    }
}


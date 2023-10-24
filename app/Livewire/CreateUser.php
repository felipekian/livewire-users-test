<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateUser extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    public function save()
    {
        User::create(
            $this->only(['name', 'email', 'password'])
        );
 
        return redirect('/')->with('status', 'User successfully created.');
    }

    #[Title('Create User')] 
    public function render()
    {
        return view('livewire.create-user');
    }
}

<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class IndexUser extends Component
{
    #[Title('Users')]
    public function render()
    {
        $users = User::all();
        return view('livewire.index-user',compact('users'));
    }
}

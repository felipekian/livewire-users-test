<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class UpdateUser extends Component
{
    public $user;
    public $name = '';
    public $email = '';

    public function mount(User $user) 
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        $this->user->update(
            $this->only(['name', 'email'])
        );

        return redirect('/')->with('status', 'User successfully updated.');
    }

    #[Title('Edit User')]
    public function render()
    {
        return view('livewire.update-user');
    }
}

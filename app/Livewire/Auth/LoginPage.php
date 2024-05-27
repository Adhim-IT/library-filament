<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class LoginPage extends Component
{
    public $username;
    public $password;
    public function save()
    {
        $this->validate([
            'username' => 'required|string|max:255|exists:users,username',
            'password' => 'required|string|min:3|max:255',
        ]);

        if (!Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            session()->flash('error', 'Wrong credentials');
            return;
        }


        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.login-page');
    }
}

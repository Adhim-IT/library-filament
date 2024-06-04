<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Role;

class RegisterPage extends Component
{

    public $full_name;

    public $phone;
    public $username;
    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $user = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'phone'=> $this->phone,
            'password' => Hash::make($this->password),
            'role_id' => 2,
        ]);


        // Login pengguna yang baru terdaftar
        auth()->login($user);

        // Redirect ke halaman yang sesuai
        return redirect()->intended();
    }
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}

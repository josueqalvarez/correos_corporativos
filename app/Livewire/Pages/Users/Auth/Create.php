<?php

namespace App\Livewire\Pages\Users\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.index')]
class Create extends Component
{

    public string $fullname = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function create_user()
    {
        // Validate the input fields
        $this->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:3|confirmed',
            'password_confirmation' => 'required',
        ]);

        // Create a new user
        $user = \App\Models\User::create([
            'name' => $this->fullname,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        auth()->login($user);
        session()->regenerate();

        return redirect()->route('home')->with('success', 'Cuenta creada exitosamente. ¡Bienvenido!');
    }

    public function render()
    {
        return view('livewire.pages.users.auth.create');
    }
}

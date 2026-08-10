<?php

namespace App\Livewire\Pages\Users\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.index')]
class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $passwordVisible = false;
    public bool $remember = false;

    public function login()
    {

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->addError('email', 'El correo no existe.');
            return;
        }

        if (!Hash::check($this->password, $user->password)) {
            $this->addError('password', 'La contraseña es incorrecta.');
            return;
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            Auth::login($user);
            session()->regenerate();
            return redirect()->intended(route('profile'));
        }

    }

    public function mount()
    {
        if (url()->previous() !== route('crear-cuenta')) {
            session()->put('url.intended', url()->previous());
        }
    }

    public function render()
    {
        return view('livewire.pages.users.auth.login');
    }
}

<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

new #[Layout('layouts.index')] class extends Component {
    public string $email = '';
    public string $password = '';

    public function login()
    {

        # Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->addError('email', 'El correo no existe.');
            return;
        }

        if (!Hash::check($this->password, $user->password)) {
            $this->addError('password', 'La contraseña es incorrecta.');
            return;
        }

        Auth::login($user);
        session()->regenerate();

        return redirect()->route('profile');
    }
};

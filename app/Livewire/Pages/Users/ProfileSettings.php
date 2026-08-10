<?php

namespace App\Livewire\Pages\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

#[Layout('layouts.index')]
class ProfileSettings extends Component
{
    public User $user;

    public function borrar_cuenta()
    {
        User::where('id', $this->user->id)->delete();

        redirect()->route('home');
    }

    public string $current_password = '';
    public string $new_password = '';
    public string $new_password_confirmation = '';

    public function update_password()
    {
        
        $this->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:3|confirmed',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        if (!Hash::check($this->current_password, $this->user->password)) {
            $this->addError('current_password', 'La contraseña actual es incorrecta.');
            $this->reset(['new_password', 'new_password_confirmation']);
            return;
        }

        $this->user->update([
            'password' => Hash::make($this->new_password),
        ]);

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);
        session()->flash('success', 'Contraseña actualizada exitosamente.');
    }

    public function render()
    {
        return view('livewire.pages.users.profile_settings');
    }
}

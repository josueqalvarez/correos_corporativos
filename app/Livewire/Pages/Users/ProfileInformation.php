<?php

namespace App\Livewire\Pages\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.index')]
class ProfileInformation extends Component
{
    use WithFileUploads;
    public User $user;

    public string $new_name = '';
    public string $new_lastname = '';
    public string $new_phone = '';

    public $profile_photo = null; // Se guarda la foto de perfil temporalmente antes de subirla al servidor
    public string $path = ''; // Se guarda la ruta de la foto de perfil en el servidor después de subirla

    public function actualizar_datos()
    {
        $this->validate([
            'new_name' => 'nullable|string|max:255',
            'new_lastname' => 'nullable|string|max:255',
            'new_phone' => 'nullable|string|max:20',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:1024', // 1MB Max
        ]);

        if ($this->profile_photo) {
            $this->path = $this->profile_photo->store('profiles', 'public');
        }

        $this->user->update([
            'name' => $this->new_name,
            'lastname' => $this->new_lastname,
            'phone' => $this->new_phone,
            'image' => $this->path,
        ]);

        session()->flash('message', 'Datos actualizados correctamente.');

        $this->profile_photo = null;
    }

    public function borrar_foto(): void
    {
        if ($this->profile_photo) {
            $this->reset('profile_photo');

            return;
        }

        if ($this->user->image) {
            Storage::disk('public')->delete($this->user->image);
            $this->user->update(['image' => null]);
            $this->user->refresh();
            $this->path = '';
        }
    }

    public function mount()
    {
        $this->new_name = $this->user->name;
        $this->new_lastname = $this->user->lastname ? $this->user->lastname : '';
        $this->new_phone = $this->user->phone ? $this->user->phone : '';
        $this->path = $this->user->image ?? '';
    }

    public function render()
    {
        return view('livewire.pages.users.profile_information');
    }
}

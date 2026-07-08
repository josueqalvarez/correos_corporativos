<?php

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('home'));
    }

};
?>

<div class="flex items-center gap-4">
    @auth
        <p class="font-label-sm text-label-sm text-white">
            ¡Hola, {{ auth()->user()->name }}!</p>
        <a class="bg-secondary text-on-secondary px-6 py-2 rounded-lg font-bold hover:scale-95 duration-150 transition-all font-label-sm text-label-sm"
            wire:click.prevent="logout">
            Cerrar sesión
        </a>
    @else
        <a class="bg-secondary text-on-secondary px-6 py-2 rounded-lg font-bold hover:scale-95 duration-150 transition-all font-label-sm text-label-sm"
            href="{{ route('login') }}">
            Iniciar sesión
        </a>
    @endauth
</div>

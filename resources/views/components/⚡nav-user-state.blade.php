<?php

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public bool $isMenuOpen = false;

    public function toggleMenu(): void
    {
        $this->isMenuOpen = ! $this->isMenuOpen;
    }

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
        <div class="relative">
            <button type="button"
                class="flex items-center gap-2 rounded-lg px-3 py-2 font-label-sm text-label-sm text-white transition-colors hover:bg-white/10"
                wire:click="toggleMenu">
                <span>¡Hola, {{ auth()->user()->name }}!</span>
                <svg class="h-4 w-4 transition-transform {{ $isMenuOpen ? 'rotate-180' : '' }}" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </button>

            @if ($isMenuOpen)
                <div
                    class="absolute right-0 mt-2 w-48 rounded-xl border border-outline-variant/20 bg-surface-container-low p-2 shadow-lg">
                    <a class="block rounded-lg px-3 py-2 font-label-sm text-label-sm text-on-surface hover:bg-surface-container-high"
                        href="{{ route('profile') }}" wire:navigate>
                        Perfil
                    </a>

                    <button type="button"
                        class="mt-1 w-full rounded-lg px-3 py-2 text-left font-label-sm text-label-sm text-error hover:bg-error/10"
                        wire:click.prevent="logout">
                        Cerrar sesión
                    </button>
                </div>
            @endif
        </div>
    @else
        <a class="bg-secondary text-on-secondary px-6 py-2 rounded-lg font-bold hover:scale-95 duration-150 transition-all font-label-sm text-label-sm"
            href="{{ route('login') }}">
            Iniciar sesión
        </a>
    @endauth
</div>

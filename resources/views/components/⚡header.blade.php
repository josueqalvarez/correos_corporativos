<?php

use Livewire\Component;

new class extends Component {
    public bool $isMobileMenuOpen = false;

    public array $routes = [
        'home' => 'Inicio',
        'blog' => 'Blog',
        'que-incluye' => '¿Qué incluye?',
        'dominio-y-hosting-email' => 'Dominio y Hosting Email',
        'contacto' => 'Contáctanos',
    ];

    public function toggleMobileMenu(): void
    {
        $this->isMobileMenuOpen = ! $this->isMobileMenuOpen;
    }

};
?>

<!-- TopNavBar -->
<header class="fixed top-0 left-0 z-50 w-full bg-primary/95 backdrop-blur-sm dark:bg-primary-container/95 h-header-height border-b border-white/10">
    <div class="page-shell flex h-full items-center justify-between gap-3 sm:gap-4">
        <div class="font-headline-md text-headline-md font-bold text-on-primary dark:text-on-primary-container shrink-0">
            EmailCorp
        </div>

        {{-- Navigation --}}
        <livewire:nav />

        <div class="flex items-center gap-2 sm:gap-3">
            <livewire:nav-user-state/>

            <button
                aria-expanded="{{ $isMobileMenuOpen ? 'true' : 'false' }}"
                aria-label="Abrir menú de navegación"
                class="inline-flex min-h-touch-target min-w-touch-target items-center justify-center rounded-xl border border-white/15 bg-white/10 text-on-primary transition-colors hover:bg-white/15 md:hidden"
                type="button"
                wire:click="toggleMobileMenu"
            >
                <span class="material-symbols-outlined">{{ $isMobileMenuOpen ? 'close' : 'menu' }}</span>
            </button>
        </div>

    </div>

    @if ($isMobileMenuOpen)
        <div class="md:hidden border-t border-white/10 bg-primary/98 px-margin-mobile py-4 shadow-2xl">
            <nav class="flex flex-col gap-2">
                @foreach ($routes as $route => $label)
                    <a
                        class="rounded-2xl px-4 py-3 text-sm font-semibold transition-colors {{ request()->routeIs($route . '*') ? 'bg-secondary text-on-secondary' : 'bg-white/8 text-on-primary hover:bg-white/12' }}"
                        href="{{ route($route) }}"
                        wire:click="toggleMobileMenu"
                        wire:navigate
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </nav>
        </div>
    @endif

    {{ $slot }}
</header>

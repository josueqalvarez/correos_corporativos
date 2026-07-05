<?php

use Livewire\Component;

new class extends Component {
    //

    public array $routes = [
        '/' => 'Inicio',
        'blog' => 'Blog',
        'que-incluye' => '¿Qué incluye?',
        'dominio-y-hosting-email' => 'Dominio y Hosting Email',
        'contacto' => 'Contáctanos',
        #'opiniones' => 'Opiniones',
        'faq' => 'Preguntas frecuentes',
    ];

    public string $currentRoute = 'text-secondary-fixed font-bold border-b-2 border-secondary-fixed pb-1 font-label-sm text-label-sm';

    public string $defaultRoute = 'text-on-primary/80 dark:text-on-primary-container/80 hover:text-on-primary transition-colors font-label-sm text-label-sm';
};
?>



{{-- Navigation --}}
<nav class="hidden md:flex gap-8">
    @foreach ($routes as $route => $label)
        <a class="{{ request()->is($route) ? $currentRoute : $defaultRoute }}" href="{{ $route }}" wire:navigate>
            {{ $label }}
        </a>
    @endforeach
</nav>

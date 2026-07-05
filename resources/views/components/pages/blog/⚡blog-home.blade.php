<?php

use Livewire\Attributes\Layout;
use Livewire\Component;

new class extends Component {
    #[Layout('components.layouts.index')]
    public string $search_query = '';

    public array $feature_article = [
        'title' => 'Cómo evitar que tus correos lleguen a spam: Guía DNS Definitiva',
        'category' => 'Seguridad',
        'time' => '12 de Octubre, 2024',
        'description' => 'Aprende a dominar las mejores herramientas de comunicación empresarial. Guías expertas sobre Zoho Mail, Google Workspace y optimización de infraestructura DNS.',
        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD8dvZP3NTGWU6MX7zKCY-f_9Dzrzbk77FIdwBefwCtkbcrM4jeTfLJEcxPqnQCdj5wbu50RH_K8gPEeotZni2Bj2Q-ncWPF92FOF5p4rSH8SeTcZyV4ecH1KKf6vOjDb-qEQZ8JYba2Lnb_ZaNequD_ai9xMjnXr6sEDPFo_RqtR9iwz_GZ7eTAQ8UN0krfxN6L2hdsTdZZSi-otGrZJHCjH72BkNSRoCd-ui_wDzAwxAKnsxodGhyWw',
    ];

    public array $bd = [
        [
            'title' => 'Guía completa para configurar Zoho Mail con tu dominio propio',
            'category' => 'DNS & Configuración',
            'read_time' => 5,
            'content' => 'Descubre cómo mover toda tu infraestructura de correo entre proveedores sin arriesgar la integridad de tu información histórica.',
            'description' => 'Aprende a dominar las mejores herramientas de comunicación empresarial. Guías expertas sobre Zoho Mail, Google Workspace y optimización de infraestructura DNS.',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBp9aQbwuo3jjONEuoSSfPqwxbeliaUGH0hfdOkXL5dAEbi-pY-NZHh2Rayg_Hzxb15-xxAOaqxpbBW3d-Nm9HHOIsMtnf9k8IC7qBeS_qW7-Z8B9BhWN30oh012EVm_-D_kkSiVaV7IF3TupT8X4ddyDajrN7R5Ri1kfftwXA0ZpX1eH-yYtNrDJXlWkxLxsXxrkkKOgjR7uKe6KiFTDGXM00wz-rzBLpztvvnR5mH35A77P2a3S40EA',
        ],
    ];

    public array $categories = ['Zoho Mail', 'Google Workspace', 'DNS', 'Seguridad', 'Productividad', 'Empresas'];

    public array $more_visited = [
        [
            'title' => 'Configuración SPF y DKIM paso a paso',
            'read_count' => '3.2k',
        ],
    ];
};
?>

<div>
    <!-- Hero Section -->
    <section class="relative py-section-padding overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20 pointer-events-none">

        </div>
        <div class="max-w-[1280px] mx-auto px-8 md:px-32 relative z-10 flex flex-col items-center text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 bg-mint-container/30 text-on-mint-container rounded-full mb-8">
                <span class="font-label-mono text-label-mono uppercase tracking-wider">Centro de Conocimiento</span>
            </div>
            <h1 class="font-display-xl text-display-xl-mobile md:text-display-xl max-w-4xl mb-6">
                Blog sobre Correos Corporativos
            </h1>
            <p class="font-subheading text-subheading text-on-surface-variant max-w-2xl mb-10">
                Aprende a dominar las mejores herramientas de comunicación empresarial. Guías expertas sobre Zoho Mail,
                Google Workspace y optimización de infraestructura DNS.
            </p>
            <div class="flex flex-row gap-4 items-center w-full max-w-lg mb-12">
                <div class="relative w-full ">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input
                        class="w-full pl-12 pr-4 py-4 rounded-2xl border border-outline-variant bg-surface-container-lowest focus:ring-2 focus:ring-secondary/20 focus:border-secondary outline-none transition-all"
                        placeholder="Buscar artículos, guías o tutoriales..." type="text"
                        wire:model.live="search_query" />
                </div>

            </div>
        </div>
    </section>
    <!-- Featured Articles Grid (Bento Style) -->
    @if ($search_query)
        <livewire:blog-buscador :search_query="$search_query" />
    @else
        <section class="py-section-padding bg-surface-container-low/50">
            <div class="max-w-[1280px] mx-auto px-8 md:px-32">
                <div class="flex justify-between items-end mb-12">
                    <div>
                        <h2 class="font-headline-lg text-headline-lg mb-2">Artículos destacados</h2>
                        <p class="text-on-surface-variant">Seleccionados cuidadosamente por nuestros expertos técnicos.
                        </p>
                    </div>
                    <div class="hidden md:flex gap-2">
                        <button
                            class="p-2 rounded-full border border-outline-variant hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button
                            class="p-2 rounded-full border border-outline-variant hover:bg-surface-container-highest transition-colors">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                    <!-- Main Featured Card -->
                    <article
                        class="md:col-span-8 group relative overflow-hidden rounded-3xl bg-surface-container-lowest shadow-sm border border-outline-variant/30 hover-lift">
                        <div class="grid md:grid-cols-2 h-full">
                            <div class="relative h-64 md:h-auto overflow-hidden">
                                <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                    data-alt="A clean, minimalist high-tech visualization of digital signals and envelopes flying through a stylized blue and teal sky, representing secure enterprise email infrastructure. The style is modern, sleek, and high-fidelity, resembling Stripe's marketing aesthetic with smooth gradients and soft ambient lighting."
                                    src="{{ $feature_article['img'] }}" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>
                            <div class="p-8 flex flex-col justify-center">
                                <div class="flex items-center gap-3 mb-6">
                                    <span
                                        class="px-3 py-1 bg-secondary-fixed text-on-secondary-fixed-variant rounded-lg font-label-mono text-label-mono uppercase">{{ $feature_article['category'] }}</span>
                                    <span
                                        class="text-on-surface-variant/60 font-label-mono text-label-mono">{{ $feature_article['time'] }}</span>
                                </div>
                                <h3 class="font-headline-lg text-headline-lg mb-4 leading-tight">
                                    {{ $feature_article['title'] }}</h3>
                                <p class="text-on-surface-variant mb-8 line-clamp-3">
                                    {{ $feature_article['description'] }}</p>
                                <a class="inline-flex items-center gap-2 text-secondary font-bold hover:gap-4 transition-all"
                                    href="#">
                                    Leer artículo <span class="material-symbols-outlined">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </article>
                    <!-- Side Featured Card -->
                    <article
                        class="md:col-span-4 group overflow-hidden rounded-3xl bg-navy-container text-on-tertiary-fixed p-8 flex flex-col justify-between hover-lift">
                        <div class="mb-8">
                            <div class="p-4 bg-on-tertiary-fixed-variant/20 rounded-2xl w-fit mb-6">
                                <span class="material-symbols-outlined text-secondary-fixed text-4xl">mail_lock</span>
                            </div>
                            <span
                                class="px-3 py-1 bg-secondary-fixed/10 text-secondary-fixed rounded-lg font-label-mono text-label-mono uppercase mb-4 inline-block">Productividad</span>
                            <h3 class="text-2xl font-bold leading-tight mb-4">Zoho Mail vs Google Workspace: ¿Cuál
                                elegir en
                                2024?</h3>
                            <p class="text-on-tertiary-container/80 text-sm">Comparamos costos, almacenamiento y
                                herramientas de colaboración para que tomes la mejor decisión para tu empresa.</p>
                        </div>
                        <a class="inline-flex items-center gap-2 text-secondary-fixed font-bold hover:gap-4 transition-all"
                            href="#">
                            Ver comparativa <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <!-- Main Content Area -->
        <section class="py-section-padding">
            <div class="max-w-[1280px] mx-auto px-8 md:px-32 grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Latest Articles -->
                <div class="lg:col-span-8">
                    <h2 class="font-headline-lg text-headline-lg mb-10">Últimos artículos</h2>
                    <div class="space-y-12">
                        @foreach ($bd as $item)
                            <article class="group grid md:grid-cols-3 gap-8">
                                <div
                                    class="md:col-span-1 h-48 rounded-2xl overflow-hidden border border-outline-variant/30">
                                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                        data-alt="A macro photography shot of a sleek high-end server rack with subtle glowing teal indicator lights. The aesthetic is extremely clean and corporate, utilizing deep shadows and soft metallic reflections to convey high-availability infrastructure. The mood is professional and technologically advanced."
                                        src="{{ $item['img'] }}" />
                                </div>
                                <div class="md:col-span-2">
                                    <div class="flex gap-4 mb-3">
                                        <span class="text-secondary font-bold text-sm">{{ $item['category'] }}</span>
                                        <span class="text-on-surface-variant/60 text-sm">• {{ $item['read_time'] }} min
                                            de lectura</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-3 group-hover:text-secondary transition-colors">
                                        {{ $item['title'] }}</h3>
                                    <p class="text-on-surface-variant mb-4">{{ $item['content'] }}</p>
                                    </p>
                                    <button class="text-primary font-bold text-sm flex items-center gap-1" wire:navigate
                                        href=" {{ route('blog-articulo', ['title' => $item['title']]) }} ">
                                        Continuar leyendo
                                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                                    </button>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <button
                        class="mt-16 w-full py-4 border border-outline-variant rounded-2xl font-bold hover:bg-surface-container-highest transition-colors">
                        Ver todos los artículos
                    </button>
                </div>
                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-12">
                    <!-- Categories -->
                    <div class="glass-card p-8 rounded-3xl">
                        <h3 class="font-headline-lg text-2xl mb-6">Categorías</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($categories as $category)
                                <a class="px-4 py-2 bg-surface-container-highest rounded-full text-sm font-medium hover:bg-secondary hover:text-on-secondary transition-all"
                                    href="#">{{ $category }}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Newsletter -->
                    <div class="bg-primary p-8 rounded-3xl text-on-primary">
                        <span class="material-symbols-outlined text-4xl mb-4 text-secondary-fixed">mail</span>
                        <h3 class="text-2xl font-bold mb-4">Boletín Técnico</h3>
                        <p class="text-on-primary-container text-sm mb-6">Recibe mensualmente las mejores prácticas de
                            seguridad y configuración de correo directamente en tu bandeja.</p>
                        <form class="space-y-4">
                            <input
                                class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder:text-white/40 focus:ring-2 focus:ring-secondary-fixed outline-none"
                                placeholder="tu@empresa.com" type="email" />
                            <button
                                class="w-full bg-secondary-fixed text-on-secondary-fixed font-bold py-3 rounded-xl hover:opacity-90 transition-opacity">Suscribirme</button>
                        </form>
                    </div>
                    <!-- Popular Posts -->
                    <div class="p-8">
                        <h3 class="font-headline-lg text-2xl mb-6">Lo más leído</h3>
                        <div class="space-y-6">
                            @foreach ($more_visited as $item)
                                <a class="flex gap-4 group" href="#">
                                    <span
                                        class="text-3xl font-black text-outline-variant group-hover:text-secondary transition-colors">01</span>
                                    <div>
                                        <h4 class="font-bold text-sm leading-snug group-hover:underline">
                                            {{ $item['title'] }}</h4>
                                        <span class="text-xs text-on-surface-variant/60">{{ $item['read_count'] }}
                                            lecturas</span>
                                    </div>
                                </a>
                            @endforeach


                        </div>
                    </div>
                </aside>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="max-w-[1280px] mx-auto px-8 md:px-32 mb-section-padding">
            <div
                class="bg-mint-container p-12 md:p-20 rounded-[3rem] relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-12">
                <div
                    class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-secondary/10 rounded-full blur-3xl">
                </div>
                <div class="relative z-10 md:max-w-xl">
                    <h2 class="font-display-xl text-display-xl-mobile md:text-headline-lg text-on-mint-container mb-6">
                        ¿Necesitas ayuda para configurar tu correo corporativo?</h2>
                    <p class="text-on-mint-container/80 text-lg mb-8">Nuestros técnicos certificados en Zoho y Google
                        están
                        listos para asistirte en la implementación de tu infraestructura empresarial.</p>
                    <button
                        class="bg-primary text-on-primary px-8 py-4 rounded-full font-bold flex items-center gap-3 hover:bg-zinc-800 transition-colors shadow-xl">
                        <span class="material-symbols-outlined" data-weight="fill">chat</span>
                        Hablar por WhatsApp
                    </button>
                </div>
                <div class="relative z-10 w-full md:w-1/3">
                    <div class="glass-card p-6 rounded-3xl border-secondary/20 shadow-2xl">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-full bg-secondary/20 flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary">support_agent</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-mint-container">Soporte Express</p>
                                <p class="text-xs text-on-mint-container/60">Respuesta en menos de 15 min</p>
                            </div>
                        </div>
                        <p class="text-sm text-on-mint-container/80 italic">"Resolvieron mi problema con los registros
                            DNS
                            en tiempo récord. Servicio técnico de primer nivel en Perú."</p>
                    </div>
                </div>
            </div>
        </section>
    @endif


</div>

<?php

use Livewire\Component;
use Livewire\Attributes\Reactive;

new class extends Component {
    #[Reactive]
    public string $search_query = '';

    public array $articles = [
        [
            'category' => 'INFRAESTRUCTURA',
            'date' => '15 OCT 2024',
            'title' => 'Guía Definitiva: Cómo elegir el mejor correo corporativo peru en 2024',
            'description' => 'Para las empresas locales, contar con un correo corporativo peru no solo mejora la presencia de marca, sino que garantiza que los servidores estén optimizados para la latencia regional. MailCorp ofrece la mejor latencia en peru para servicios de correo corporativo masivo.',
            'link' => '#',
        ],
    ];
};
?>

<section>
    <!-- Header & Statistics -->
    <x.header>
        <div
            class="border-b border-outline-variant/20 pb-8 relative max-w-[1280px]  mx-auto px-8 md:px-32">
            <h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">
                Resultados para: <span class="text-secondary">"{{ $search_query }}"</span>
            </h1>
            <p class="font-label-mono text-label-mono text-on-surface-variant">
                SE ENCONTRARON 12 ARTÍCULOS
            </p>
        </div>
    </x.header>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mx-auto px-8 md:px-32 max-w-[1280px] pb-section-padding">
        <!-- Main Content: Search Results -->
        <section class="lg:col-span-8 space-y-8">

            @foreach ($articles as $item)
                <!-- Results -->
                <article
                    class="group p-6 rounded-3xl bg-surface-container-lowest border border-outline-variant/30 hover:shadow-lg transition-all duration-300">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <span
                                class="px-3 py-1 bg-secondary-container text-on-secondary-container text-label-mono font-label-mono rounded-full">{{ $item['category'] }}</span>
                            <span class="text-label-mono text-on-surface-variant">{{ $item['date'] }} min</span>
                        </div>
                        <h2
                            class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface group-hover:text-secondary transition-colors">
                            {{ $item['title'] }}
                        </h2>
                        <p class="text-body-base text-on-surface-variant line-clamp-3">
                            {{ $item['description'] }}
                        </p>
                        <a class="flex items-center gap-2 text-secondary font-bold group-hover:gap-4 transition-all"
                            href="{{ $item['link'] }}">
                            Leer más <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </article>
            @endforeach
            <!-- Result Item 4 (Asymmetric Card Example) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <article class="p-8 rounded-3xl bg-navy-container text-on-tertiary-fixed flex flex-col justify-between">
                    <div>
                        <span
                            class="material-symbols-outlined text-secondary-fixed text-4xl mb-6">workspace_premium</span>
                        <h3 class="font-headline-lg text-headline-lg-mobile text-white mb-4">¿Buscas una solución
                            Premium?</h3>
                        <p class="text-on-tertiary-container mb-6">Nuestros planes empresariales de <span
                                class="search-highlight">correo corporativo peru</span> incluyen soporte 24/7 y 100GB
                            por buzón.</p>
                    </div>
                    <button
                        class="w-full py-4 bg-secondary-fixed text-on-secondary-fixed rounded-xl font-bold hover:bg-secondary-fixed-dim transition-colors">
                        Ver Planes Empresa
                    </button>
                </article>
                <article
                    class="group p-6 rounded-3xl bg-surface-container-lowest border border-outline-variant/30 hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <h3 class="font-subheading text-on-surface mb-2">Migración sin costo</h3>
                        <p class="text-on-surface-variant text-body-base mb-4">Migramos tu actual <span
                                class="search-highlight">correo corporativo</span> desde cualquier proveedor en <span
                                class="search-highlight">peru</span> sin pérdida de datos.</p>
                    </div>
                    <a class="text-secondary font-bold flex items-center gap-2" href="#">Consultar migración <span
                            class="material-symbols-outlined">chevron_right</span></a>
                </article>
            </div>

        </section>
        <!-- Sidebar: Categories & Extra Info -->
        <aside class="lg:col-span-4 space-y-12">
            <!-- Popular Categories -->
            <div class="glass-card p-8 rounded-3xl">
                <h3 class="font-headline-lg text-headline-lg-mobile text-on-surface mb-6">Categorías populares</h3>
                <div class="flex flex-wrap gap-3">
                    <a class="px-4 py-2 bg-surface-container-high rounded-full text-label-mono font-label-mono text-on-surface-variant hover:bg-secondary-container hover:text-on-secondary-container transition-colors"
                        href="#">#CLOUDMAIL</a>
                    <a class="px-4 py-2 bg-surface-container-high rounded-full text-label-mono font-label-mono text-on-surface-variant hover:bg-secondary-container hover:text-on-secondary-container transition-colors"
                        href="#">#DOMINIOS.PE</a>
                    <a class="px-4 py-2 bg-surface-container-high rounded-full text-label-mono font-label-mono text-on-surface-variant hover:bg-secondary-container hover:text-on-secondary-container transition-colors"
                        href="#">#SEGURIDAD</a>
                    <a class="px-4 py-2 bg-surface-container-high rounded-full text-label-mono font-label-mono text-on-surface-variant hover:bg-secondary-container hover:text-on-secondary-container transition-colors"
                        href="#">#MICROSOFT365</a>
                    <a class="px-4 py-2 bg-surface-container-high rounded-full text-label-mono font-label-mono text-on-surface-variant hover:bg-secondary-container hover:text-on-secondary-container transition-colors"
                        href="#">#HOSTING_LIMA</a>
                    <a class="px-4 py-2 bg-surface-container-high rounded-full text-label-mono font-label-mono text-on-surface-variant hover:bg-secondary-container hover:text-on-secondary-container transition-colors"
                        href="#">#MARKETING</a>
                </div>
            </div>
            <!-- Featured Image Card -->
            <div class="relative h-[400px] rounded-3xl overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent z-10"></div>
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-700"
                    data-alt="A professional workspace in Lima, Peru, featuring a sleek laptop displaying a modern email dashboard. Large windows reveal the Miraflores skyline at dusk. The lighting is sophisticated and warm, using high-end corporate photography style with deep navies and vibrant teal accents. The atmosphere conveys trust, connectivity, and technological reliability."
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCPwSLaRwVIz5zagabsACBYNjtEaxcU3Z2wZNlittwBTAN_OJ8YlbS2gJHCv4CNWnvQH92wbNAsebNwfZ1HR8a3Z5aZceb99gLlIOWSsJZBrVk7ISFwEGa4jEsBiGElUqcqGplDX12CXaH96jFM-qobITWJ6jbJf9shgtTHzAQzOrHsB6i5z7ihOgAICmfG_xXjifJbLhpYkevK77__yu6ZFU0bdxPTTmGQyg1gzItlhCB_uvLxgEvQmQ')">
                </div>
                <div class="absolute inset-0 z-20 p-8 flex flex-col justify-end">
                    <span class="text-secondary-fixed font-label-mono text-label-mono mb-2 uppercase">Líderes en
                        Perú</span>
                    <h4 class="text-white font-headline-lg text-headline-lg-mobile mb-4">¿Por qué elegir infraestructura
                        local?</h4>
                    <p class="text-on-tertiary-container mb-6 text-sm">Descubre cómo los servidores en Lima reducen los
                        tiempos de respuesta en un 40%.</p>
                    <a class="text-white font-bold flex items-center gap-2 group/btn" href="#">
                        Ver beneficios <span
                            class="material-symbols-outlined group-hover/btn:translate-x-2 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Help Desk Card -->
            <div class="p-8 rounded-3xl bg-surface-container-lowest border-2 border-dashed border-outline-variant/50">
                <span class="material-symbols-outlined text-secondary text-4xl mb-4">support_agent</span>
                <h3 class="font-subheading text-on-surface mb-2">¿Necesitas ayuda personalizada?</h3>
                <p class="text-on-surface-variant text-body-base mb-6">Nuestros expertos en infraestructura de correo
                    en Perú están listos para asesorarte sin compromiso.</p>
                <a class="inline-block w-full text-center py-3 border border-primary text-primary rounded-xl font-bold hover:bg-primary hover:text-on-primary transition-all"
                    href="#">Hablar con un asesor</a>
            </div>
        </aside>
    </div>
</section>

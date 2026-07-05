<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<x-layouts.index>
    <!-- Hero Section -->
    <section class="relative h-100 flex items-center justify-center overflow-hidden bg-primary-container">

        <div class="relative z-10 text-center px-margin-mobile">
            <h1
                class="font-headline-xl text-headline-xl text-on-primary mb-4 md:text-headline-xl text-headline-lg-mobile">
                Lo que dicen nuestros clientes
            </h1>
            <p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl mx-auto">
                Miles de profesionales confían en EmailCorp para gestionar su infraestructura de correo crítica con
                total fiabilidad.
            </p>
        </div>
    </section>
    <!-- Stats Grid (Bento Style Intro) -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-8 -mt-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="bg-surface-container-lowest p-stack-lg rounded-xl border border-outline-variant text-center">
                <span class="block font-headline-xl text-headline-xl text-primary mb-1">4.9/5</span>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Calificación
                    Media</p>
            </div>
            <div class="bg-surface-container-lowest p-stack-lg rounded-xl border border-outline-variant text-center">
                <span class="block font-headline-xl text-headline-xl text-primary mb-1">10k+</span>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Empresas Activas
                </p>
            </div>
            <div class="bg-surface-container-lowest p-stack-lg rounded-xl border border-outline-variant text-center">
                <span class="block font-headline-xl text-headline-xl text-primary mb-1">99.9%</span>
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Uptime
                    Garantizado</p>
            </div>
        </div>
    </section>
    <!-- Testimonials Grid -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-8 py-section-padding">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div
                class="testimonial-card bg-surface-container-lowest p-8 rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <div class="flex gap-1 mb-4">
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-8 italic leading-relaxed">
                        "La transición a EmailCorp fue impecable. Buscábamos una solución corporativa que no nos diera
                        problemas de entregabilidad y han superado nuestras expectativas."
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover"
                        data-alt="Professional headshot of a female executive in a modern office setting, soft natural lighting, corporate minimalist style, neutral color palette with primary blue accents."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZON1FVRqEjwqLSkzQnkEjNf8HGJEpr9A1fe24weBXfu4I4w5DSW1p0XcS-bEsjKrfyyDFwq8ZOrgEg7u9t1m6fdhxnvyUo4xItQwDBhhn2DvKNJJxl6GCkRnUmnvMOUScOS0dZ_N6yGGWD1bglEA2yctCIxPfErqXBxQeQOnWKT6WBNdGavCXcYl3C-sWxFGYrcjrf8cC7I-M_5PLdUlujwx1bcSD2XOWSfJfR44AKrwINrWZpaLbpM5dS78HEpQ-jixmGv0yUCjh">
                    <div>
                        <p class="font-label-sm text-label-sm font-bold text-on-surface">Laura Martínez</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">CTO, TechGrowth S.A.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div
                class="testimonial-card bg-surface-container-lowest p-8 rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <div class="flex gap-1 mb-4">
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-8 italic leading-relaxed">
                        "El soporte técnico es de otro nivel. Cualquier duda técnica es resuelta en minutos por expertos
                        que realmente saben de lo que hablan."
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover"
                        data-alt="Portrait of a young professional man with glasses, smiling warmly, clean studio lighting, high-key background, wearing a professional navy blue shirt to match brand colors."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQxKAnj9ygxBScawSQoQ6UVFTpzHC-a0-5Hx_rcAYBdruC6nguuXCvx6vQ3KxoqrdN5rEm-Gq-xXLnXq2qPSMMyJ8B8e045Cxp8iBxb6NYVI8emvaRBehdZDHi8nWgQdnHU0WUAzdQ_gheWQ4ujp1aixrTHKEz5Nvu-r4DmVZVaaNfB64di5b1Xnvl8mSTsnspCITbxEdECeELcXWintjVR-iyqJsOietU7wCTQRbVAvAu0wdG3fgUl0m9_usKbGT6cqzfgV_IsHzU">
                    <div>
                        <p class="font-label-sm text-label-sm font-bold text-on-surface">Carlos Ruiz</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Director Creativo, PixelArt</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div
                class="testimonial-card bg-surface-container-lowest p-8 rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <div class="flex gap-1 mb-4">
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-8 italic leading-relaxed">
                        "Configurar el servidor de correo para todo mi equipo fue cuestión de minutos. La interfaz es
                        limpia y directa, justo lo que un administrador busca."
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover"
                        data-alt="Close up portrait of an elegant woman in a white blazer, minimalist grey background, soft cinematic lighting, professional and trustworthy expression, high-end photography style."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXh10AWeqE-M5C_gvxzJFf_00ZLrsqYMnU0MWxKvZJQ-IdmSG7Q7O7Rbz3Ci-OvoY3MUAJZhj3KQfCGhdHGgkTM43PDKYLgQbjGilpRvUgA_b18-aarfzBehU8gvsPZ1iaF9Cas8Jz-5zIEON5Ho8ftL5At_K7cqeXhZnZMjZLAZYURPhSSXUf22-llh3kVgq4ZrSDbGmTrSNRyjHWwZBDwY3ybwGfWLiDs17C4lMlThWXSp_cSoZbljmswUmdPJVksNrQQdQXNM6O">
                    <div>
                        <p class="font-label-sm text-label-sm font-bold text-on-surface">Ana Belén G.</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Fundadora, Green Logistics</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div
                class="testimonial-card bg-surface-container-lowest p-8 rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <div class="flex gap-1 mb-4">
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-8 italic leading-relaxed">
                        "EmailCorp nos ha permitido escalar nuestra comunicación sin preocuparnos por límites de cuotas
                        o caídas de servidor. Una roca en fiabilidad."
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover"
                        data-alt="Middle-aged businessman with a confident smile, wearing a tailored suit, blurred modern architecture background, bright daylight, professional corporate aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBz8Nr2q6WKcEfVeCM4_If-v2-EgJRDEwPdoAlPj-KSJnEJ8RpPiPyZmabvSLnbwSNBgh3woMHqeUx1S_py_hOYZL5Z8x6e0MRmhtzyw6zlGRtRZajLgcFd_cb8AIBdnCUyMDFnLaXAHVAB7Xy-3Rwb7-yVe9oHiE8e3H5CFEgc0DeeXNupvdOu1Vx674GwKH_Q6tGppncMm_aBaLSezO8_Ryc_CD-5IRqkz7cPCfzP-PrFqhE-RhwyyCIXVkw94zh1CXGbmtWd9vH3">
                    <div>
                        <p class="font-label-sm text-label-sm font-bold text-on-surface">Roberto V.</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Operaciones, Global Fin</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div
                class="testimonial-card bg-surface-container-lowest p-8 rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <div class="flex gap-1 mb-4">
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-8 italic leading-relaxed">
                        "Lo mejor es la transparencia. No hay costes ocultos y el servicio es exactamente lo que
                        prometen. Recomendado al 100%."
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover"
                        data-alt="Creative professional in a bright studio, wearing casual but smart attire, soft focused background with art supplies, warm morning light, natural and authentic feel."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfQZnHAfyRLQgfxXhkDi-_0BGFiEHb5ZvIJCZjFwdXK3bHtKUPIgeJvkF2B4EETWxm_f_iw6aCRKo3sbGG1OQ-JjdgRy9QOoy3nxri9ad2IqWuDKoBeXE7puP-3PUD5IovVRoK_zozTA9toSRnOU66LFs9hWJ1dz4MpqzD1ZNVzlE8pNbirr0kGVNwznre2XIzfYuOEmIUK-df_wKwsvS0FsldqwGdvKMOFttGRqeZi_do7_b99nmzW4HEuIZNq1PNAGr-Koy_opd2">
                    <div>
                        <p class="font-label-sm text-label-sm font-bold text-on-surface">Elena Soler</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Freelance Designer</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div
                class="testimonial-card bg-surface-container-lowest p-8 rounded-xl border border-outline-variant flex flex-col justify-between">
                <div>
                    <div class="flex gap-1 mb-4">
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                        <span class="material-symbols-outlined star-fill">star</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mb-8 italic leading-relaxed">
                        "Buscábamos seguridad y EmailCorp nos proporcionó encriptación y filtrado de spam de primer
                        nivel desde el primer día."
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover"
                        data-alt="Portrait of a tech expert in a data center environment, blue ambient lighting, sharp focus on the face, modern technological atmosphere, sleek and professional."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxW9RZ3h1efpN0Ulsi4j2k9ssFN4IfniSCI8ko81_UQqkgC7dNW3zV7lNFV9HbHvylfK5-UiQ4JEue0BRm0tfDhQOg3hhyvb_VAZEt7XKeKP8W_g2X1OM-h8smQVanpGDj0r4VhJ79MAs1W5n0k-qW_hXXaNiIkpn5EyZjjauWj5ByaGnp_KOel91vvdYgeE3PH4jCa50t3Dl9WJt13apMNIxYzdn9KGjKs2dmxiBN9cpqOdIPqI0Xm5rCFP8eGpmYDeJbWg5owRTG">
                    <div>
                        <p class="font-label-sm text-label-sm font-bold text-on-surface">Marcos D.</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Admin de Sistemas, NetSafe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Stories (Asymmetric Layout) -->
    <section class="bg-surface-container-low py-section-padding">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-8">
            <div class="mb-16">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-2">Historias de Éxito</h2>
                <div class="h-1 w-20 bg-secondary rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <!-- Featured Story -->
                <div class="lg:col-span-8 group relative overflow-hidden rounded-xl h-100">
                    <div class="absolute inset-0 bg-linear-to-t from-primary/90 to-transparent z-10"></div>
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="A wide-angle shot of a vibrant, modern coworking hub with glass walls and tech workers, bright afternoon sun filtering through, high-end corporate lifestyle photography, navy blue and white color palette."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBlXiEcw_soQsZvs5-zLJvNDOG7tXM9jddxBeVYZ7otj-jMJNuEuOMvo3Lw6ANXMKHdfGTDhJvHSqdKsKydMjkRR7cG2haYe2ZmG4qeLeKdGOG2DTemSc6gJDSs2QLgawxpiuXmDBRDmzNGYGh--1Z0Ix-iPXIhrOxKxwjoZTEPXOTpt2WGB9PLQkvhH55GDTsf1-gJAY5b8yFHzd251J7GWJuYBaOfzn0-IfnbyyEa-dLjdcRsstJr9CHFQP5myJu5e5vojWYhUh02')">
                    </div>
                    <div class="absolute bottom-0 left-0 p-stack-lg z-20">
                        <span
                            class="inline-block bg-secondary text-white font-label-sm text-label-sm px-3 py-1 rounded-full mb-4">Caso
                            de Estudio: Enterprise</span>
                        <h3 class="font-headline-lg text-headline-lg text-white mb-4">Cómo GlobalCorp redujo su
                            latencia de correo en un 40%</h3>
                        <button
                            class="text-white font-label-sm text-label-sm font-bold flex items-center gap-2 hover:underline">
                            Leer historia completa <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <!-- Secondary Stories -->
                <div class="lg:col-span-4 flex flex-col gap-gutter">
                    <div
                        class="bg-surface-container-lowest p-stack-md rounded-xl border border-outline-variant flex-1 flex flex-col justify-center">
                        <p class="text-secondary font-bold font-label-sm text-label-sm mb-2">E-commerce</p>
                        <h4 class="font-headline-md text-headline-md text-primary mb-2">Entregabilidad del 100% en
                            Black Friday</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">Descubre cómo ShopFast gestionó 1
                            millón de correos sin incidencias.</p>
                    </div>
                    <div
                        class="bg-surface-container-lowest p-stack-md rounded-xl border border-outline-variant flex-1 flex flex-col justify-center">
                        <p class="text-secondary font-bold font-label-sm text-label-sm mb-2">Educación</p>
                        <h4 class="font-headline-md text-headline-md text-primary mb-2">Migración masiva para 50,000
                            alumnos</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">La Universidad Tech unificó su
                            sistema de correo en tiempo récord.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-8 py-section-padding text-center">
        <div class="bg-primary p-12 md:p-16 rounded-3xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-secondary/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="relative z-10">
                <h2 class="font-headline-xl text-headline-xl text-on-primary mb-6">¿Listo para mejorar tu correo
                    corporativo?</h2>
                <p class="font-body-lg text-body-lg text-on-primary/80 mb-10 max-w-xl mx-auto">
                    Únete a las miles de empresas que ya han dado el salto a una infraestructura profesional y fiable.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-4">
                    <button
                        class="bg-secondary text-white font-bold py-4 px-10 rounded-xl font-label-sm text-label-sm hover:opacity-90 active:scale-95 transition-all">
                        Empezar Configuración
                    </button>
                    <button
                        class="bg-transparent border border-on-primary text-on-primary font-bold py-4 px-10 rounded-xl font-label-sm text-label-sm hover:bg-on-primary/10 active:scale-95 transition-all">
                        Hablar con un Experto
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.index>

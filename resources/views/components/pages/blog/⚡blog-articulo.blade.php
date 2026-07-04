<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<x-layouts.index>
    <!-- Breadcrumbs -->
    <nav
        class="flex items-center gap-2 mb-8 font-label-mono text-label-mono text-on-surface-variant uppercase tracking-wider">
        <a class="hover:text-secondary transition-colors" href="#">Blog</a>
        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
        <span class="text-on-surface">Zoho Mail</span>
    </nav>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg items-start">
        <!-- Article Body (Center/Left) -->
        <article class="lg:col-span-8">
            <!-- Header -->
            <header class="mb-12">
                <h1
                    class="font-headline-lg text-headline-lg md:text-display-xl-mobile lg:text-display-xl mb-6 text-primary leading-tight">
                    Guía completa para configurar Zoho Mail con tu dominio propio
                </h1>
                <div class="flex flex-wrap items-center gap-6 text-on-surface-variant font-label-mono text-label-mono">
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-secondary-container">person</span>
                        </div>
                        <span>Por Staff MailCorp</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined">calendar_today</span>
                        <span>24 Mayo, 2024</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>12 min de lectura</span>
                    </div>
                </div>
            </header>
            <!-- Featured Image -->
            <div class="rounded-3xl overflow-hidden mb-12 shadow-2xl">
                <img class="w-full h-auto aspect-video object-cover"
                    data-alt="A professional high-fidelity digital rendering of a sleek laptop displaying a clean Zoho Mail interface with a customized business domain email. The scene is set in a modern, brightly lit office environment with soft glassmorphism accents and a corporate navy and teal color palette. Soft ambient light illuminates the silver laptop while technical network diagrams float subtly in the blurred background, conveying a sense of advanced cloud infrastructure and reliability."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXyETBQmFMXgF2TlOxx2R6JPWsIZD0UaMTxj_WRrHRNvS9mfDZIFDi5Y6ljTdbm-ZlLBCZXLJVqW7Dd7IsBK_53XdbPAgGd1b2JkTVnSOeeJ3hKmAHBTbaLSRFQExtuZZk5lAsSNWpN7LpbJeucP6d7dTO8XmUSXYGXxQLQ9hKw6EjCkdeHZdOjlyCKF_NZZqcBTd_Pp7jF4coputEVROlogxGO7KhPu2RkbcDXdIKRnBfllSOkJYn-A" />
            </div>
            <!-- Content Intro -->
            <div class="prose prose-lg max-w-none text-on-surface-variant leading-relaxed">
                <p class="text-subheading font-subheading mb-8">
                    Configurar el correo electrónico de tu empresa puede parecer un desafío técnico intimidante, pero
                    con Zoho Mail y esta guía paso a paso, tendrás una infraestructura de nivel corporativo funcionando
                    en cuestión de minutos.
                </p>
                <!-- Table of Contents (Mobile Only) -->
                <div class="lg:hidden bg-surface-container p-6 rounded-2xl mb-8">
                    <h4 class="font-bold text-primary mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined">toc</span> Índice
                    </h4>
                    <ul class="space-y-2 text-label-mono">
                        <li><a class="hover:text-secondary underline decoration-secondary/30" href="#spf">¿Qué es un
                                registro SPF?</a></li>
                        <li><a class="hover:text-secondary underline decoration-secondary/30" href="#planes">Comparativa
                                de Planes</a></li>
                        <li><a class="hover:text-secondary underline decoration-secondary/30" href="#configuracion">Paso
                                a paso: Configuración</a></li>
                        <li><a class="hover:text-secondary underline decoration-secondary/30" href="#faq">Preguntas
                                Frecuentes</a></li>
                    </ul>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-primary mt-12 mb-6" id="spf">¿Qué es un registro
                    SPF y por qué lo necesitas?</h2>
                <p class="mb-6">
                    El Sender Policy Framework (SPF) es un método de autenticación de correo electrónico que especifica
                    los servidores de correo autorizados para enviar correos electrónicos en nombre de tu dominio. Sin
                    un SPF correctamente configurado, tus correos tienen una alta probabilidad de terminar en la carpeta
                    de SPAM de tus clientes.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex gap-3">
                        <span class="material-symbols-outlined text-success-teal"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span>Mejora drásticamente la tasa de entrega (Deliverability).</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="material-symbols-outlined text-success-teal"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span>Previene el "Spoofing" o suplantación de identidad de tu marca.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="material-symbols-outlined text-success-teal"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span>Es un estándar exigido por Gmail, Outlook y Yahoo.</span>
                    </li>
                </ul>
                <!-- Pro Tip Box -->
                <div class="bg-mint-container/20 border-l-4 border-success-teal p-8 rounded-r-3xl my-10">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-success-teal text-on-primary rounded-xl">
                            <span class="material-symbols-outlined">lightbulb</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-on-mint-container mb-2">Consejo Pro</h4>
                            <p class="text-on-mint-container/80 text-body-base">
                                Si ya tienes otros servicios que envían correos (como Mailchimp o Salesforce), no crees
                                varios registros SPF. Debes combinarlos todos en una sola línea de texto en tu
                                configuración DNS para evitar conflictos de validación.
                            </p>
                        </div>
                    </div>
                </div>
                <h3 class="font-subheading text-subheading text-primary font-bold mt-10 mb-4" id="planes">Planes de
                    Correo: ¿Cuál elegir?</h3>
                <p class="mb-6">Zoho ofrece opciones que se adaptan desde freelancers hasta corporaciones
                    transnacionales. Aquí nuestra comparativa rápida:</p>
                <!-- Comparative Table -->
                <div class="overflow-x-auto mb-12 rounded-2xl border border-outline-variant/30 shadow-sm">
                    <table class="w-full text-left border-collapse bg-surface-container-lowest">
                        <thead>
                            <tr class="bg-primary text-on-primary">
                                <th class="p-5 font-bold">Característica</th>
                                <th class="p-5 font-bold">Mail Lite</th>
                                <th class="p-5 font-bold">Mail Premium</th>
                            </tr>
                        </thead>
                        <tbody class="text-body-base">
                            <tr class="border-b border-outline-variant/10">
                                <td class="p-5 font-medium text-primary">Almacenamiento</td>
                                <td class="p-5">5GB / 10GB</td>
                                <td class="p-5">50GB</td>
                            </tr>
                            <tr class="border-b border-outline-variant/10">
                                <td class="p-5 font-medium text-primary">Tamaño de adjuntos</td>
                                <td class="p-5">250 MB</td>
                                <td class="p-5">1 GB</td>
                            </tr>
                            <tr class="border-b border-outline-variant/10">
                                <td class="p-5 font-medium text-primary">White Labeling</td>
                                <td class="p-5 text-on-surface-variant/40"><span
                                        class="material-symbols-outlined">close</span></td>
                                <td class="p-5 text-success-teal"><span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">check</span></td>
                            </tr>
                            <tr>
                                <td class="p-5 font-medium text-primary">Respaldo / e-Discovery</td>
                                <td class="p-5 text-on-surface-variant/40"><span
                                        class="material-symbols-outlined">close</span></td>
                                <td class="p-5 text-success-teal"><span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">check</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- FAQ Section -->
                <section class="mt-16 bg-surface-container-low p-8 md:p-12 rounded-3xl" id="faq">
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-8 text-center">Preguntas Frecuentes
                    </h2>
                    <div class="space-y-4">
                        <details
                            class="group bg-surface-container-lowest rounded-2xl border border-outline-variant/20 overflow-hidden"
                            open="">
                            <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                <span class="font-bold text-primary">¿Cuánto tiempo tarda en propagarse el DNS?</span>
                                <span
                                    class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 text-on-surface-variant">
                                Generalmente los cambios en los registros MX y SPF toman entre 30 minutos y 24 horas en
                                propagarse globalmente, dependiendo de tu proveedor de dominio.
                            </div>
                        </details>
                        <details
                            class="group bg-surface-container-lowest rounded-2xl border border-outline-variant/20 overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                <span class="font-bold text-primary">¿Puedo migrar mis correos antiguos de Gmail?</span>
                                <span
                                    class="material-symbols-outlined transition-transform group-open:rotate-180">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 text-on-surface-variant">
                                Sí, Zoho Mail incluye una herramienta de migración gratuita que permite importar todos
                                tus correos, carpetas y contactos mediante IMAP/POP o directamente desde la API de
                                Google Workspace.
                            </div>
                        </details>
                    </div>
                </section>
            </div>
        </article>
        <!-- Sidebar -->
        <aside class="lg:col-span-4 sticky top-28 space-y-8">
            <!-- Content Index -->
            <div class="hidden lg:block bg-surface-container-low p-8 rounded-3xl">
                <h4 class="font-bold text-primary mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined">bookmark</span> En este artículo
                </h4>
                <nav class="flex flex-col gap-4">
                    <a class="text-body-base text-on-surface-variant hover:text-secondary transition-colors pl-4 border-l-2 border-transparent hover:border-secondary"
                        href="#spf">¿Qué es un registro SPF?</a>
                    <a class="text-body-base text-on-surface-variant hover:text-secondary transition-colors pl-4 border-l-2 border-transparent hover:border-secondary"
                        href="#planes">Comparativa de Planes</a>
                    <a class="text-body-base text-on-surface-variant hover:text-secondary transition-colors pl-4 border-l-2 border-transparent hover:border-secondary"
                        href="#faq">Preguntas Frecuentes</a>
                </nav>
            </div>
            <!-- Related Posts -->
            <div class="bg-surface-container-lowest p-8 rounded-3xl border border-outline-variant/20">
                <h4 class="font-bold text-primary mb-6">Artículos relacionados</h4>
                <div class="space-y-6">
                    <a class="group block" href="#">
                        <div class="flex gap-4">
                            <div class="w-20 h-20 shrink-0 rounded-xl overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="A clean graphic showing the Microsoft 365 logo on a bright white background with subtle blue gradients. The image evokes a feeling of corporate productivity, cloud integration, and professional software solutions, matching a light-mode SaaS aesthetic."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDe74n2HJzoPAoOOSCTCOc5mz5G-Q0r2YrbbSF_yE4u_wpLdTvhQyfKksnScROLDgUQwrAXQxYdvQbc-9lnIB56W1Jxt81We3460VAFLpXncxJahYpZuE9XPDDCIeHYd0GBmIZfSj3WnFg0XjbGQjxbzIi94gyav6d2_DRYwEnM0S1TrPaMO-poNqRaljFeAqGob29vV1K2pDMKlQoT_PUMcJbB78xtIw0hScPS6RE2oV0cbpND_7Kzzg" />
                            </div>
                            <div>
                                <p
                                    class="font-bold text-body-base group-hover:text-secondary transition-colors leading-tight">
                                    Configurando Microsoft 365 para PYMEs</p>
                                <p class="text-label-mono text-on-surface-variant mt-1">Soporte • 5 min</p>
                            </div>
                        </div>
                    </a>
                    <a class="group block" href="#">
                        <div class="flex gap-4">
                            <div class="w-20 h-20 shrink-0 rounded-xl overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                    data-alt="Abstract cybersecurity concept with glowing blue lock icons and shield patterns overlaid on a minimalist white background. The visual style is technical, secure, and modern, representing advanced email encryption and data protection for business communications."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuANoyIu8WKetpsAWjodMX7074jC3N2QQpnNBMY_0PC7PEtkELgoB39Ayc43FtoT6nAW1SfOaWfgNf4wJ7cXkk3dkGAfra0cBjbErCAEiME4gHbZp4T2PnxubKq8ZfqV6p9bGgkwXarlD5Uot0dsuDYbgM8_BB8JVRJhLrOHqrK7IHYZn1Ojb7dRDYghDSC3Z5xk1cywmS1StScHCgn91xAaQl3GnK8jUfNmy59Eh5VcBwKJy9-KSu90Hg" />
                            </div>
                            <div>
                                <p
                                    class="font-bold text-body-base group-hover:text-secondary transition-colors leading-tight">
                                    Seguridad: Activando el 2FA en tu cuenta</p>
                                <p class="text-label-mono text-on-surface-variant mt-1">Seguridad • 8 min</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Newsletter / CTA Card -->
            <div class="bg-primary text-on-primary p-8 rounded-3xl relative overflow-hidden shadow-2xl">
                <div class="relative z-10">
                    <h4 class="font-headline-lg text-headline-lg mb-4">¿Necesitas ayuda técnica?</h4>
                    <p class="opacity-80 mb-6 text-body-base">Nuestros ingenieros pueden realizar toda la configuración
                        de registros MX, SPF y DKIM por ti.</p>
                    <button
                        class="w-full bg-secondary-fixed text-on-secondary-fixed py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-white transition-colors active:scale-95 duration-200">
                        <span class="material-symbols-outlined">chat</span>
                        Hablar con Soporte
                    </button>
                </div>
                <!-- Decorative background pattern -->
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-secondary opacity-20 blur-3xl rounded-full">
                </div>
            </div>
        </aside>
    </div>
    <!-- Sticky Footer CTA Banner -->
    <section
        class="mt-section-padding bg-navy-container text-on-tertiary-fixed p-12 rounded-[40px] flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="text-center md:text-left">
            <h2 class="font-headline-lg text-headline-lg mb-2 text-on-primary">¿Prefieres que nosotros configuremos
                todo por ti?</h2>
            <p class="text-on-navy-container text-subheading">Ahorra tiempo y evita errores técnicos. Servicio de
                configuración express disponible.</p>
        </div>
        <a class="bg-success-teal text-primary font-bold px-8 py-4 rounded-full flex items-center gap-3 hover:scale-105 transition-transform shadow-lg whitespace-nowrap"
            href="https://wa.me/mailcorpperu">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">phone_iphone</span>
            WhatsApp Corporativo
        </a>
    </section>
</x-layouts.index>

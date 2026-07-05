<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new class extends Component {
    #[Layout('layouts.index')]
    //
};
?>

<div>
    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-12 pb-section-padding">
        <div class="max-w-container-max mx-auto px-margin-x grid lg:grid-cols-2 gap-stack-lg items-center">
            <div class="z-10">
                <div
                    class="inline-flex items-center gap-2 bg-secondary-container/30 text-on-secondary-container px-3 py-1 rounded-full font-label-mono mb-6">
                    <span class="material-symbols-outlined text-[18px]">verified</span>
                    PARTNER OFICIAL ZOHO &amp; GOOGLE
                </div>
                <h1 class="font-display-xl-mobile md:font-display-xl text-primary leading-tight mb-6">
                    Proyecta una imagen profesional desde el primer correo que envías.
                </h1>
                <p class="text-on-surface-variant text-subheading mb-8 max-w-lg">
                    Configuramos tu correo corporativo con Zoho Mail, Gmail o Outlook para que transmitas confianza y
                    seguridad en todo el Perú.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-10">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="font-medium">Desde S/49.90</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="font-medium">Pago único</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="font-medium">5+ años exp.</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        <span class="font-medium">Todo el Perú</span>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="bg-secondary text-on-secondary px-8 py-4 rounded-xl font-subheading flex items-center justify-center gap-2 shadow-lg shadow-secondary/20 hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined">call</span>
                        Agendar llamada por WhatsApp
                    </button>
                    <button
                        class="border border-outline-variant text-on-surface px-8 py-4 rounded-xl font-subheading hover:bg-surface-container transition-colors">
                        Ver precio
                    </button>
                </div>
            </div>
            <div class="relative">
                <div
                    class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[140%] aspect-square bg-gradient-to-tr from-secondary/10 to-transparent rounded-full blur-3xl">
                </div>
                <img alt="MailCorp Peru Professional Email Setup Display" class="w-full h-auto rounded-3xl shadow-2xl"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZacFdzR4uKSmYBlYeQyaY2_zMz0aBGdda2TMVOmSZkJkHvVf0OwG4oP-YHmf5_6AK0jXq1MMq-mamTexIKP4SKP1fKVOzvOti-nVPprLeEExAHUrK731enzy2IB409vfwZDRpEwnZSZfzL5j-1_Vi31GBsWhrLnVTSZI_mXLVQOcOXsKGtAhTAaysC31q1GY8Ivt5A19t_eChBM_c85s-kSBwFAn3X5120iu7QUaoXaIuwxlK4CpSLAeZYOiCUTICH9mF7oRjF-4z" />
            </div>
        </div>
    </section>
    <!-- Trust Bar -->
    <section class="bg-surface-container-low py-12">
        <div class="max-w-container-max mx-auto px-margin-x">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-12">
                <div class="bg-surface p-6 rounded-2xl flex items-center gap-4 shadow-sm">
                    <span class="material-symbols-outlined text-primary text-3xl">verified_user</span>
                    <span class="font-medium">Más de 5 años de experiencia</span>
                </div>
                <div class="bg-surface p-6 rounded-2xl flex items-center gap-4 shadow-sm">
                    <span class="material-symbols-outlined text-primary text-3xl">lock</span>
                    <span class="font-medium">Configuración segura</span>
                </div>
                <div class="bg-surface p-6 rounded-2xl flex items-center gap-4 shadow-sm">
                    <span class="material-symbols-outlined text-primary text-3xl">devices</span>
                    <span class="font-medium">Compatible con Gmail y Outlook</span>
                </div>
                <div class="bg-surface p-6 rounded-2xl flex items-center gap-4 shadow-sm">
                    <span class="material-symbols-outlined text-primary text-3xl">support_agent</span>
                    <span class="font-medium">Soporte personalizado</span>
                </div>
            </div>
            <div class="flex flex-wrap justify-center gap-12 opacity-40 grayscale">
                <div class="flex items-center gap-2"><span class="material-symbols-outlined">bolt</span> <span
                        class="font-label-mono">ENTREGA RÁPIDA</span></div>
                <div class="flex items-center gap-2"><span class="material-symbols-outlined">settings_suggest</span>
                    <span class="font-label-mono">CONFIGURACIÓN PRO</span></div>
                <div class="flex items-center gap-2"><span class="material-symbols-outlined">security</span> <span
                        class="font-label-mono">SPF/DKIM/DMARC</span></div>
                <div class="flex items-center gap-2"><span class="material-symbols-outlined">smartphone</span> <span
                        class="font-label-mono">MULTI DISPOSITIVO</span></div>
            </div>
        </div>
    </section>
    <!-- The Problem -->
    <section class="py-section-padding">
        <div class="max-w-container-max mx-auto px-margin-x text-center mb-16">
            <h2 class="font-headline-lg-mobile md:font-headline-lg text-primary mb-4">¿Todavía utilizas un correo
                personal para tu negocio?</h2>
            <p class="text-on-surface-variant max-w-2xl mx-auto">El correo gratuito limita tu crecimiento y afecta cómo
                te perciben tus clientes potenciales.</p>
        </div>
        <div class="max-w-5xl mx-auto px-margin-x grid md:grid-cols-2 gap-12 items-center">
            <div
                class="p-8 border-2 border-dashed border-outline-variant rounded-3xl bg-surface-container-lowest opacity-70">
                <div class="flex items-center gap-3 mb-4 text-error">
                    <span class="material-symbols-outlined">cancel</span>
                    <span class="font-bold">Negocio Informal</span>
                </div>
                <div class="text-on-surface-variant mb-2">De: juan_ventas2024@gmail.com</div>
                <div class="h-24 bg-surface-variant rounded-lg w-full mb-4"></div>
                <p class="text-sm italic">"¿Será una empresa real? El correo parece personal..."</p>
            </div>
            <div class="p-8 border-2 border-secondary/30 rounded-3xl bg-white shadow-xl scale-105">
                <div class="flex items-center gap-3 mb-4 text-secondary">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span class="font-bold">Empresa Profesional</span>
                </div>
                <div class="text-primary font-medium mb-2">De: j.perez@tuempresa.com</div>
                <div class="h-24 bg-secondary-container/20 rounded-lg w-full mb-4 flex items-center justify-center">
                    <span class="material-symbols-outlined text-secondary text-4xl">mark_as_unread</span>
                </div>
                <p class="text-sm font-medium">"Se ve profesional. Es una marca establecida."</p>
            </div>
        </div>
        <div class="text-center mt-16">
            <p class="font-display-xl-mobile md:font-headline-lg text-primary">Tu correo también forma parte de tu
                marca.</p>
        </div>
    </section>
    <!-- The Solution -->
    <section class="bg-primary text-on-primary py-section-padding relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none">

        </div>
        <div class="max-w-container-max mx-auto px-margin-x grid lg:grid-cols-2 gap-stack-lg items-center">
            <div>
                <h2 class="font-display-xl-mobile md:font-headline-lg mb-6">Nos encargamos de todo lo técnico</h2>
                <p class="text-on-primary/70 text-subheading mb-10">No necesitas saber de servidores ni registros DNS.
                    Nosotros configuramos cada detalle para que tú solo te preocupes de vender.</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-y-6 gap-x-4 mb-10">
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">shield</span> DNS &amp; MX</div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">lock_open</span> SPF/DKIM</div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">verified</span> DMARC</div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">mail</span> Gmail/Outlook</div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">smartphone</span> iOS &amp; Android
                    </div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">laptop_mac</span> PC &amp; Mac</div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">school</span> Capacitación</div>
                    <div class="flex items-center gap-2"><span
                            class="material-symbols-outlined text-secondary-fixed">support</span> Soporte Continuo
                    </div>
                </div>
                <button
                    class="bg-secondary-fixed text-on-secondary-fixed px-10 py-5 rounded-xl font-bold text-lg hover:brightness-110 transition-all">
                    ¡Quiero empezar ahora!
                </button>
            </div>
            <div class="relative group">
                <div class="bg-surface-container-highest/20 rounded-3xl p-4 backdrop-blur-md border border-white/10">
                    <img class="w-full rounded-2xl shadow-lg group-hover:scale-[1.02] transition-transform duration-500"
                        data-alt="A clean, minimalist high-fidelity tech mockup of a corporate email dashboard inside a sleek laptop frame. The dashboard displays secure authentication tags like SPF, DKIM, and DMARC with green checkmarks. The background is a soft, professional light-mode aesthetic with teal and navy accents, reflecting a high-growth SaaS and technical infrastructure vibe."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNQ_gy5R2EA779wEQOZsTBCau39SPGChTjPyFGZtrHIPhp_aBVFoCdQl1yF6qvMjwwwzivIppCNb4sgmpeppB8Xy9KRqWeAMook170LYfeUa35YBUHPyIOVIZ9T5IlIsFf1XcFZQEtF1ZWt-Hv2iwk8Onf7MJZ1ho_GI2TMsZHITTs5lctb_U9S1fYfKs9CrkHz2K8Y31sNVDPQ-MAHrlPHBtnJd0sg4Cx4K5l2MlGMMYbl2bMhka9OM75tCybOkpKJgavm4J5K6n7" />
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits -->
    <section class="py-section-padding" id="beneficios">
        <div class="max-w-container-max mx-auto px-margin-x">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-primary">¿Por qué elegir MailCorp Peru?
                </h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                <div
                    class="bg-white p-8 rounded-3xl border border-outline-variant hover:shadow-xl transition-shadow group">
                    <div
                        class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">handshake</span>
                    </div>
                    <h3 class="font-subheading text-primary mb-4">Confianza Inmediata</h3>
                    <p class="text-on-surface-variant">Un dominio propio (@tuempresa.com) le dice al mundo que eres una
                        marca seria y establecida.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl border border-outline-variant hover:shadow-xl transition-shadow group">
                    <div
                        class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">workspace_premium</span>
                    </div>
                    <h3 class="font-subheading text-primary mb-4">Profesionalismo</h3>
                    <p class="text-on-surface-variant">Destaca frente a la competencia que aún usa correos genéricos
                        gratuitos.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl border border-outline-variant hover:shadow-xl transition-shadow group">
                    <div
                        class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <h3 class="font-subheading text-primary mb-4">Ahorro de Tiempo</h3>
                    <p class="text-on-surface-variant">Configuración rápida y eficiente. En menos de 24 horas estarás
                        listo para enviar correos.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl border border-outline-variant hover:shadow-xl transition-shadow group">
                    <div
                        class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <h3 class="font-subheading text-primary mb-4">Máxima Seguridad</h3>
                    <p class="text-on-surface-variant">Protocolos SPF, DKIM y DMARC para que tus correos no lleguen a
                        la carpeta de SPAM.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl border border-outline-variant hover:shadow-xl transition-shadow group">
                    <div
                        class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">devices_other</span>
                    </div>
                    <h3 class="font-subheading text-primary mb-4">Multi-dispositivo</h3>
                    <p class="text-on-surface-variant">Accede a tus correos desde tu computadora, tablet o smartphone
                        sincronizado perfectamente.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-3xl border border-outline-variant hover:shadow-xl transition-shadow group">
                    <div
                        class="w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">psychology</span>
                    </div>
                    <h3 class="font-subheading text-primary mb-4">Asesoría Experta</h3>
                    <p class="text-on-surface-variant">Te guiamos en la elección de la mejor plataforma según el tamaño
                        de tu negocio.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing & Inclusions -->
    <section class="py-section-padding bg-surface-container-low" id="precios">
        <div class="max-w-container-max mx-auto px-margin-x">
            <div class="grid lg:grid-cols-3 gap-gutter items-start">
                <!-- Main Pricing Card -->
                <div
                    class="lg:col-span-2 bg-white rounded-[32px] p-8 md:p-12 shadow-2xl border border-outline-variant relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 bg-secondary text-on-secondary px-6 py-2 rounded-bl-3xl font-bold font-label-mono">
                        MÁS POPULAR</div>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg mb-8">Todo Incluido por solo:</h2>
                    <div class="flex items-baseline gap-4 mb-10">
                        <span class="text-5xl md:text-7xl font-extrabold text-primary">S/49.90</span>
                        <span class="text-on-surface-variant font-medium">Pago único por configuración</span>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6 mb-12">
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3"><span
                                    class="material-symbols-outlined text-secondary">check</span> Configuración DNS, MX
                                completa</li>
                            <li class="flex items-center gap-3"><span
                                    class="material-symbols-outlined text-secondary">check</span> Protocolos SPF, DKIM,
                                DMARC</li>
                            <li class="flex items-center gap-3"><span
                                    class="material-symbols-outlined text-secondary">check</span> Creación de hasta 3
                                cuentas</li>
                        </ul>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3"><span
                                    class="material-symbols-outlined text-secondary">check</span> Configuración en
                                Gmail/Outlook</li>
                            <li class="flex items-center gap-3"><span
                                    class="material-symbols-outlined text-secondary">check</span> Configuración en el
                                móvil</li>
                            <li class="flex items-center gap-3"><span
                                    class="material-symbols-outlined text-secondary">check</span> Videotutorial de uso
                                rápido</li>
                        </ul>
                    </div>
                    <div
                        class="bg-primary-container text-on-primary-container p-6 rounded-2xl mb-10 border border-on-primary-fixed-variant/20">
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined">info</span>
                            <p class="text-sm">El dominio y el plan de Zoho/Google son independientes. Los S/49.90
                                corresponden exclusivamente a nuestro servicio técnico experto de configuración.</p>
                        </div>
                    </div>
                    <button
                        class="w-full bg-secondary text-on-secondary py-5 rounded-2xl font-bold text-xl flex items-center justify-center gap-3 shadow-xl shadow-secondary/20 hover:translate-y-[-2px] transition-all">
                        Agendar mi llamada de configuración
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
                <!-- Sidebar Cards -->
                <div class="space-y-gutter">
                    <div class="bg-white p-6 rounded-3xl border border-outline-variant shadow-sm">
                        <h3 class="font-bold mb-4 flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">calendar_today</span>
                            ¿Qué pagar cada año?
                        </h3>
                        <p class="text-sm text-on-surface-variant mb-4">Solo mantienes tu dominio (~$15/año). Si usas
                            Zoho Mail Free, no pagas mensualidad por correos.</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl border border-outline-variant shadow-sm">
                        <h3 class="font-bold mb-4 flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">help_center</span>
                            Te ayudamos a elegir
                        </h3>
                        <p class="text-sm text-on-surface-variant mb-4">Analizamos si te conviene el plan gratuito de
                            Zoho o la potencia de Google Workspace.</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl border border-outline-variant shadow-sm">
                        <h3 class="font-bold mb-4 flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">domain</span>
                            Dominio a tu nombre
                        </h3>
                        <p class="text-sm text-on-surface-variant mb-4">Tú eres el dueño absoluto de tu dominio.
                            Nosotros solo te brindamos la asistencia técnica.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Process Timeline -->
    <section class="py-section-padding" id="proceso">
        <div class="max-w-container-max mx-auto px-margin-x">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-primary">Tu camino al correo profesional
                </h2>
                <p class="text-on-surface-variant">Simple, rápido y sin complicaciones para ti.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-gutter relative">
                <div class="hidden lg:block absolute top-12 left-0 w-full h-0.5 bg-outline-variant -z-10"></div>
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold mb-6 border-4 border-background">
                        1</div>
                    <h4 class="font-bold mb-2">Llamada</h4>
                    <p class="text-sm text-on-surface-variant">Coordinamos tus necesidades vía WhatsApp.</p>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold mb-6 border-4 border-background">
                        2</div>
                    <h4 class="font-bold mb-2">Dominio</h4>
                    <p class="text-sm text-on-surface-variant">Elegimos el nombre y el plan ideal.</p>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold mb-6 border-4 border-background">
                        3</div>
                    <h4 class="font-bold mb-2">Setup</h4>
                    <p class="text-sm text-on-surface-variant">Configuramos registros técnicos (DNS).</p>
                </div>
                <!-- Step 4 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold mb-6 border-4 border-background">
                        4</div>
                    <h4 class="font-bold mb-2">Pruebas</h4>
                    <p class="text-sm text-on-surface-variant">Verificamos recepción y envío seguro.</p>
                </div>
                <!-- Step 5 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center font-bold mb-6 border-4 border-background">
                        5</div>
                    <h4 class="font-bold mb-2">Capacitación</h4>
                    <p class="text-sm text-on-surface-variant">Te enseñamos a usar tu nueva cuenta.</p>
                </div>
                <!-- Step 6 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 bg-secondary text-on-secondary rounded-full flex items-center justify-center font-bold mb-6 border-4 border-background">
                        <span class="material-symbols-outlined">check</span>
                    </div>
                    <h4 class="font-bold mb-2">¡Listo!</h4>
                    <p class="text-sm text-on-surface-variant">Empieza a proyectar profesionalismo.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Comparison Table -->
    <section class="py-section-padding bg-surface-variant/30">
        <div class="max-w-4xl mx-auto px-margin-x">
            <div class="text-center mb-12">
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-primary">¿Por qué nosotros?</h2>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden border border-outline-variant shadow-lg">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-primary text-on-primary">
                            <th class="p-6">Característica</th>
                            <th class="p-6">Otros Servicios</th>
                            <th class="p-6 bg-secondary/10 text-primary">MailCorp Peru</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        <tr>
                            <td class="p-6 font-medium">Soporte Técnico</td>
                            <td class="p-6 text-on-surface-variant">Vía tickets, lento</td>
                            <td class="p-6 bg-secondary/5 font-bold">Personalizado vía WhatsApp</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-medium">Configuración SPF/DKIM</td>
                            <td class="p-6 text-on-surface-variant">A veces ignorado</td>
                            <td class="p-6 bg-secondary/5 font-bold">Incluido y verificado</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-medium">Capacitación</td>
                            <td class="p-6 text-on-surface-variant">Ninguna</td>
                            <td class="p-6 bg-secondary/5 font-bold">Videotutorial y guía rápida</td>
                        </tr>
                        <tr>
                            <td class="p-6 font-medium">Claridad en costos</td>
                            <td class="p-6 text-on-surface-variant">Letras pequeñas</td>
                            <td class="p-6 bg-secondary/5 font-bold">Pago único transparente</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="py-section-padding">
        <div class="max-w-3xl mx-auto px-margin-x">
            <h2 class="font-headline-lg-mobile md:font-headline-lg text-center mb-12">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <details class="group bg-white rounded-2xl border border-outline-variant p-6" open="">
                    <summary class="list-none cursor-pointer flex justify-between items-center font-bold text-lg">
                        ¿Qué incluye exactamente el pago de S/49.90?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <p class="mt-4 text-on-surface-variant">Incluye la configuración técnica completa de tus registros
                        DNS (MX, SPF, DKIM, DMARC), la creación de hasta 3 cuentas de correo y la integración en tus
                        dispositivos (móvil y PC).</p>
                </details>
                <details class="group bg-white rounded-2xl border border-outline-variant p-6">
                    <summary class="list-none cursor-pointer flex justify-between items-center font-bold text-lg">
                        ¿Cuánto pagaré cada año?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <p class="mt-4 text-on-surface-variant">Únicamente la renovación de tu dominio, que suele costar
                        entre S/50 a S/60 anuales. Si utilizas el plan gratuito de Zoho Mail, no tendrás costos
                        mensuales por las cuentas de correo.</p>
                </details>
                <details class="group bg-white rounded-2xl border border-outline-variant p-6">
                    <summary class="list-none cursor-pointer flex justify-between items-center font-bold text-lg">
                        ¿Qué pasa si ya tengo un dominio?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <p class="mt-4 text-on-surface-variant">Excelente, podemos trabajar sobre tu dominio actual. Solo
                        necesitaremos acceso al panel de administración de tu proveedor para realizar los ajustes
                        técnicos.</p>
                </details>
                <details class="group bg-white rounded-2xl border border-outline-variant p-6">
                    <summary class="list-none cursor-pointer flex justify-between items-center font-bold text-lg">
                        ¿Puedo usar mi correo en Gmail o Outlook?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <p class="mt-4 text-on-surface-variant">Sí, configuramos tu nueva cuenta corporativa para que
                        puedas leer y enviar correos directamente desde la interfaz de Gmail que ya conoces o desde la
                        aplicación de Outlook.</p>
                </details>
            </div>
        </div>
    </section>
    <!-- Final CTA -->
    <section class="bg-primary-container text-on-primary py-section-padding text-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 pointer-events-none">

        </div>
        <div class="max-w-container-max mx-auto px-margin-x relative z-10">
            <h2 class="font-display-xl-mobile md:font-display-xl mb-8">La confianza comienza con un correo corporativo
            </h2>
            <p class="text-on-primary/70 text-subheading mb-12 max-w-2xl mx-auto">No dejes que una cuenta gratuita
                detenga el crecimiento de tu empresa. Únete a cientos de emprendedores peruanos que ya profesionalizaron
                su comunicación.</p>
            <button
                class="bg-secondary text-on-secondary px-12 py-6 rounded-2xl font-bold text-2xl shadow-2xl hover:scale-105 transition-all mb-12 inline-flex items-center gap-4">
                Agendar llamada por WhatsApp
                <span class="material-symbols-outlined text-3xl">chat</span>
            </button>
            <div class="flex flex-wrap justify-center gap-12 text-on-primary/60 font-label-mono">
                <span class="flex items-center gap-2"><span class="material-symbols-outlined">speed</span> ACTIVACIÓN
                    EN 24H</span>
                <span class="flex items-center gap-2"><span class="material-symbols-outlined">support</span> SOPORTE
                    VITALICIO</span>
                <span class="flex items-center gap-2"><span class="material-symbols-outlined">security</span> 100%
                    GARANTIZADO</span>
            </div>
        </div>
    </section>
    <!-- Cross-sell Banner -->
    <div class="bg-secondary-container py-4">
        <div
            class="max-w-container-max mx-auto px-margin-x flex flex-col md:flex-row justify-center items-center gap-4 text-on-secondary-container">
            <span class="font-bold flex items-center gap-2"><span class="material-symbols-outlined">web</span>
                ¿También necesitas una página web?</span>
            <p>Podemos ayudarte a tener presencia digital completa.</p>
            <a class="bg-primary text-on-primary px-4 py-1 rounded-full font-bold text-sm hover:opacity-80 transition-opacity"
                href="#">Más información</a>
        </div>
    </div>  
</div>

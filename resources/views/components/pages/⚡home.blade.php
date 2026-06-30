<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<x-layouts.index>
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-primary py-section-padding md:min-h-[819px] flex items-center"
        id="inicio">
        <div class="absolute inset-0 opacity-10">

        </div>
        <div
            class="max-w-container-max mx-auto px-margin-mobile md:px-8 grid md:grid-cols-2 gap-gutter items-center relative z-10">
            <div class="text-on-primary space-y-stack-lg">
                <h1 class="font-headline-xl text-headline-xl leading-tight">
                    Correos corporativos para tu negocio, 
                    <span class="text-secondary-fixed">sin complicaciones</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-primary/80 max-w-lg">
                    Elevamos la imagen de tu empresa configurando correos profesionales con tu propio dominio en
                    menos de 24 horas. Olvida los problemas técnicos, nosotros nos encargamos de todo.
                </p>
                <div class="flex flex-col sm:flex-row gap-stack-md pt-4">
                    <a class="bg-secondary text-on-secondary px-stack-lg py-4 rounded-lg font-bold flex items-center justify-center gap-2 hover:brightness-110 transition-all"
                        href="#">
                        <span class="material-symbols-outlined">chat</span> Solicitar información por WhatsApp
                    </a>
                    <a class="border border-on-primary text-on-primary px-stack-lg py-4 rounded-lg font-bold flex items-center justify-center hover:bg-on-primary/10 transition-all"
                        href="#que-incluye">
                        Ver qué incluye
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="relative w-full aspect-square rounded-3xl overflow-hidden shadow-2xl">
                    <img class="w-full h-full object-cover"
                        data-alt="A professional workspace with a sleek laptop displaying a clean email inbox interface on the screen. The setting is a minimalist office with soft blue lighting and high-quality textures. The mood is highly professional and technically advanced, conveying reliability and expertise in corporate infrastructure."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbUlXZzA5THEjFJUgZlUxR812brrRVRVwkFa9v3rExuuwxUPDeYjQ0S-ryKs5-CwTUeW7XUIE5SQUf8TRI0YGL01gKwnozlwTzPjtWkZNCBPT4xaFyFbCJKq9ji7FG0Yg_wGI0VdZORaqvJJSGx-hfrr5jSXfMMh7jiG9wc2ue2y56E9EGQmKwwKAcCHFESlWOmQo9DO6-NdGV5dq8FpfdpfdxbhJkNI97tLXXvvBEWFion8H1hTTohlfIfOL9C2cPKfxElhbZ94V5" />
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits Section (Bento Style) -->
    <section class="py-section-padding bg-surface" id="que-incluye">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-8">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-4">Eficiencia en cada paso</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Diseñado para que te centres en vender,
                    no en configurar servidores.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-gutter">
                <div
                    class="bg-surface-container-lowest p-stack-lg rounded-xl border border-outline-variant hover:shadow-md transition-all">
                    <div
                        class="w-12 h-12 bg-primary-container rounded-lg flex items-center justify-center text-primary-fixed mb-6">
                        <span class="material-symbols-outlined">bolt</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-2">Entrega &lt; 24h</h3>
                    <p class="text-on-surface-variant font-body-md text-body-md">Nuestro equipo técnico trabaja en
                        tiempo real para que tu comunicación no se detenga.</p>
                </div>
                <div
                    class="bg-surface-container-lowest p-stack-lg rounded-xl border border-outline-variant hover:shadow-md transition-all">
                    <div
                        class="w-12 h-12 bg-primary-container rounded-lg flex items-center justify-center text-primary-fixed mb-6">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-2">Hasta 3 correos</h3>
                    <p class="text-on-surface-variant font-body-md text-body-md">Configuramos tus cuentas
                        principales para administración, ventas y soporte desde el primer día.</p>
                </div>
                <div
                    class="bg-surface-container-lowest p-stack-lg rounded-xl border border-outline-variant hover:shadow-md transition-all">
                    <div
                        class="w-12 h-12 bg-primary-container rounded-lg flex items-center justify-center text-primary-fixed mb-6">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-primary mb-2">3 meses soporte</h3>
                    <p class="text-on-surface-variant font-body-md text-body-md">Acompañamiento post-venta incluido
                        para resolver cualquier duda técnica que surja.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Corporate Email (Comparison) -->
    <section class="py-section-padding bg-surface-container-low" id="servicios">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-6">¿Por qué un correo corporativo?
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">
                        Un correo personal le quita seriedad a tu marca. El correo corporativo es tu primera carta
                        de presentación ante clientes y proveedores.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4 bg-error-container/20 p-4 rounded-lg border border-error/10">
                            <span class="material-symbols-outlined text-error mt-1">cancel</span>
                            <div>
                                <span class="font-bold text-error">Email Personal</span>
                                <p class="text-on-surface-variant text-body-md">fernandez_ventas89@gmail.com</p>
                                <p class="text-sm opacity-70">Transmite informalidad y poca estabilidad comercial.
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 bg-secondary-container/20 p-4 rounded-lg border border-secondary/20">
                            <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
                            <div>
                                <span class="font-bold text-secondary">Email Corporativo</span>
                                <p class="text-primary font-bold text-body-md">ventas@empresa.com</p>
                                <p class="text-sm opacity-70">Construye confianza inmediata y autoridad de marca.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-xl border border-outline-variant">
                        <div class="flex items-center gap-3 mb-6 border-b border-outline-variant pb-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary">
                                JD</div>
                            <div>
                                <p class="font-bold text-primary">Juan Delgado</p>
                                <p class="text-sm text-on-surface-variant">Director Ejecutivo</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="h-4 bg-surface-container-high rounded-full w-3/4"></div>
                            <div class="h-4 bg-surface-container-high rounded-full w-full"></div>
                            <div class="h-4 bg-surface-container-high rounded-full w-5/6"></div>
                            <div class="mt-8 pt-8 border-t border-outline-variant">
                                <p class="text-sm font-bold text-primary">Email Corporativo: Configurado</p>
                                <p class="text-xs text-on-surface-variant mt-1">SSL Activo • SPF/DKIM Verificado
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary/10 rounded-full blur-3xl -z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- For Whom Section -->
    <section class="py-section-padding bg-surface">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-8">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg text-primary">Soluciones para cada perfil</h2>
                <p class="text-on-surface-variant mt-4">Adaptamos la infraestructura según el tamaño y necesidad de
                    tu proyecto.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                <div
                    class="group p-stack-lg rounded-2xl border border-outline-variant hover:border-primary transition-all duration-300">
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Emprendedores</h3>
                    <p class="text-body-md text-on-surface-variant">Lanza tu primer proyecto con una imagen 100%
                        profesional desde el día uno.</p>
                </div>
                <div
                    class="group p-stack-lg rounded-2xl border border-outline-variant hover:border-primary transition-all duration-300">
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Pymes</h3>
                    <p class="text-body-md text-on-surface-variant">Organiza tus departamentos (Ventas,
                        Administración, RRHH) con facilidad.</p>
                </div>
                <div
                    class="group p-stack-lg rounded-2xl border border-outline-variant hover:border-primary transition-all duration-300">
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Tiendas Online</h3>
                    <p class="text-body-md text-on-surface-variant">Garantiza que tus recibos y notificaciones
                        lleguen siempre a la bandeja de entrada.</p>
                </div>
                <div
                    class="group p-stack-lg rounded-2xl border border-outline-variant hover:border-primary transition-all duration-300">
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Freelancers</h3>
                    <p class="text-body-md text-on-surface-variant">Destaca entre la competencia mostrando solidez
                        a través de tu propio dominio.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- How we work (Steps) -->
    <section class="py-section-padding bg-primary-container text-on-primary">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-8">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg">Proceso en 5 pasos</h2>
                <p class="text-on-primary-container mt-4">Simple, transparente y eficiente.</p>
            </div>
            <div class="relative flex flex-col md:flex-row justify-between gap-12">
                <!-- Progress Line (Desktop) -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-[2px] bg-primary/30 z-0"></div>
                <!-- Step 1 -->
                <div class="relative z-10 flex flex-col items-center text-center max-w-[200px] mx-auto md:mx-0">
                    <div
                        class="w-24 h-24 rounded-full bg-primary flex items-center justify-center border-4 border-primary-container mb-6">
                        <span class="material-symbols-outlined text-3xl">language</span>
                    </div>
                    <h4 class="font-bold mb-2">Elección de Dominio</h4>
                    <p class="text-sm text-on-primary-container">Buscamos y reservamos el nombre ideal para tu
                        marca.</p>
                </div>
                <!-- Step 2 -->
                <div class="relative z-10 flex flex-col items-center text-center max-w-[200px] mx-auto md:mx-0">
                    <div
                        class="w-24 h-24 rounded-full bg-primary flex items-center justify-center border-4 border-primary-container mb-6">
                        <span class="material-symbols-outlined text-3xl">settings</span>
                    </div>
                    <h4 class="font-bold mb-2">Configuración</h4>
                    <p class="text-sm text-on-primary-container">Ajustamos los registros DNS, MX y seguridad SSL.
                    </p>
                </div>
                <!-- Step 3 -->
                <div class="relative z-10 flex flex-col items-center text-center max-w-[200px] mx-auto md:mx-0">
                    <div
                        class="w-24 h-24 rounded-full bg-primary flex items-center justify-center border-4 border-primary-container mb-6">
                        <span class="material-symbols-outlined text-3xl">add_card</span>
                    </div>
                    <h4 class="font-bold mb-2">Creación de Cuentas</h4>
                    <p class="text-sm text-on-primary-container">Creamos los buzones y establecemos contraseñas
                        seguras.</p>
                </div>
                <!-- Step 4 -->
                <div class="relative z-10 flex flex-col items-center text-center max-w-[200px] mx-auto md:mx-0">
                    <div
                        class="w-24 h-24 rounded-full bg-primary flex items-center justify-center border-4 border-primary-container mb-6">
                        <span class="material-symbols-outlined text-3xl">devices</span>
                    </div>
                    <h4 class="font-bold mb-2">Sincronización</h4>
                    <p class="text-sm text-on-primary-container">Configuramos tus correos en Gmail, Outlook o
                        móvil.</p>
                </div>
                <!-- Step 5 -->
                <div class="relative z-10 flex flex-col items-center text-center max-w-[200px] mx-auto md:mx-0">
                    <div
                        class="w-24 h-24 rounded-full bg-primary flex items-center justify-center border-4 border-primary-container mb-6">
                        <span class="material-symbols-outlined text-3xl">key</span>
                    </div>
                    <h4 class="font-bold mb-2">Entrega</h4>
                    <p class="text-sm text-on-primary-container">Te entregamos las llaves de tu comunicación
                        empresarial.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="py-section-padding bg-surface" id="opiniones">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-8">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg text-primary">Nuestros clientes dicen</h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                <div class="glass-card p-stack-lg rounded-xl">
                    <div class="flex text-secondary-fixed-dim mb-4">
                        <span class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span>
                    </div>
                    <p class="text-on-surface mb-6 italic">"Increíble la rapidez. En menos de un día ya tenía mis
                        correos funcionando en el iPhone y en Outlook. Totalmente recomendado."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container-high"></div>
                        <div>
                            <p class="font-bold text-sm">Carlos M.</p>
                            <p class="text-xs text-on-surface-variant">Diseño Interior</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-stack-lg rounded-xl">
                    <div class="flex text-secondary-fixed-dim mb-4">
                        <span class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span>
                    </div>
                    <p class="text-on-surface mb-6 italic">"No sabía por dónde empezar con el dominio y ellos se
                        encargaron de todo. Muy pacientes con mis dudas técnicas."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container-high"></div>
                        <div>
                            <p class="font-bold text-sm">Lucía R.</p>
                            <p class="text-xs text-on-surface-variant">Ecommerce Manager</p>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-stack-lg rounded-xl">
                    <div class="flex text-secondary-fixed-dim mb-4">
                        <span class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span><span
                            class="material-symbols-outlined">star</span>
                    </div>
                    <p class="text-on-surface mb-6 italic">"El soporte post-venta es excelente. Me ayudaron a
                        configurar un tercer correo meses después sin problemas."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container-high"></div>
                        <div>
                            <p class="font-bold text-sm">Andrés P.</p>
                            <p class="text-xs text-on-surface-variant">Consultoría IT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final CTA -->
    <section class="py-section-padding px-margin-mobile">
        <div
            class="max-w-[1000px] mx-auto bg-primary rounded-[32px] overflow-hidden relative p-12 md:p-20 text-center">
            <div class="absolute inset-0 opacity-20 pointer-events-none">

            </div>
            <div class="relative z-10 space-y-8">
                <h2 class="font-headline-xl text-headline-xl text-on-primary">¿Listo para profesionalizar tu
                    negocio?</h2>
                <p class="font-body-lg text-body-lg text-on-primary/80 max-w-2xl mx-auto">
                    Únete a las cientos de empresas que ya confían su comunicación a EmailCorp. Configuración
                    inmediata vía WhatsApp.
                </p>
                <div class="flex justify-center">
                    <a class="bg-secondary text-on-secondary px-12 py-6 rounded-2xl font-bold text-xl hover:scale-105 transition-all shadow-xl flex items-center gap-4"
                        href="#">
                        <span class="material-symbols-outlined text-3xl">chat</span> Chatear con un experto
                    </a>
                </div>
                <p class="text-sm text-on-primary/50">Respuesta en menos de 15 minutos (Horario comercial)</p>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="py-section-padding bg-surface-container-low" id="faq">
        <div class="max-w-[800px] mx-auto px-margin-mobile">
            <h2 class="font-headline-lg text-headline-lg text-primary text-center mb-12">Preguntas frecuentes</h2>
            <div class="space-y-4">
                <details
                    class="group bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden">
                    <summary
                        class="flex justify-between items-center p-6 cursor-pointer font-bold text-primary list-none">
                        ¿Necesito ya tener un dominio comprado?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div
                        class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant bg-surface-container-low">
                        No es necesario. Si no tienes uno, nosotros te ayudamos a buscarlo y lo registramos por ti
                        como parte del proceso inicial.
                    </div>
                </details>
                <details
                    class="group bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden">
                    <summary
                        class="flex justify-between items-center p-6 cursor-pointer font-bold text-primary list-none">
                        ¿Puedo usar mi correo en mi celular?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div
                        class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant bg-surface-container-low">
                        ¡Por supuesto! Configuramos tus cuentas para que funcionen perfectamente en Android, iOS,
                        Gmail, Outlook o cualquier otro gestor que prefieras.
                    </div>
                </details>
                <details
                    class="group bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden">
                    <summary
                        class="flex justify-between items-center p-6 cursor-pointer font-bold text-primary list-none">
                        ¿Hay pagos mensuales?
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div
                        class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant bg-surface-container-low">
                        Nuestra tarifa de configuración es un pago único. No obstante, recuerda que el dominio y
                        hosting de correo suelen tener renovaciones anuales con el proveedor, las cuales te ayudamos
                        a gestionar.
                    </div>
                </details>
            </div>
        </div>
    </section>
</x-layouts.index>

<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new class extends Component {
    #[Layout('layouts.index')]
};
?>

<div>
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-primary py-24 text-center">

        <div class="relative z-10 max-w-4xl mx-auto px-margin-mobile">
            <h1 class="font-headline-xl text-headline-xl text-on-primary mb-6 md:block hidden">Centro de Ayuda</h1>
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-on-primary mb-4 md:hidden">Centro de Ayuda
            </h1>
            <p class="font-body-lg text-body-lg text-on-primary/80 max-w-2xl mx-auto">
                Resolvemos todas tus dudas técnicas y comerciales para que empieces a proyectar profesionalismo hoy
                mismo.
            </p>
        </div>
    </section>
    <!-- Search / Filter (Decorative UX) -->
    <section class="max-w-3xl mx-auto -mt-8 px-margin-mobile relative z-20">
        <div
            class="bg-surface-container-lowest rounded-xl border border-outline-variant p-2 shadow-lg flex items-center">
            <span class="material-symbols-outlined px-4 text-outline">search</span>
            <input class="w-full border-none focus:ring-0 bg-transparent py-4 font-body-md text-body-md"
                placeholder="Busca una pregunta..." type="text">
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="max-w-container-max mx-auto px-margin-mobile md:px-8 py-section-padding">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
            <!-- Sidebar Info Card -->
            <div class="lg:col-span-4">
                <div class="bg-surface-container-low border border-outline-variant rounded-xl p-8 sticky top-32">
                    <h2 class="font-headline-md text-headline-md text-primary mb-4">¿Aún tienes dudas?</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-8">
                        Nuestro equipo técnico está listo para ayudarte con la configuración de tus cuentas
                        corporativas.
                    </p>
                    <div class="space-y-4">
                        <div
                            class="flex items-start gap-4 p-4 bg-surface-container-lowest rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-secondary">support_agent</span>
                            <div>
                                <p class="font-label-sm text-label-sm text-primary font-bold">Soporte 24/7</p>
                                <p class="text-xs text-on-surface-variant">Vía WhatsApp y Correo</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 bg-surface-container-lowest rounded-lg border border-outline-variant">
                            <span class="material-symbols-outlined text-secondary">speed</span>
                            <div>
                                <p class="font-label-sm text-label-sm text-primary font-bold">Configuración Rápida</p>
                                <p class="text-xs text-on-surface-variant">Listo en menos de 24h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion List -->
            <div class="lg:col-span-8 space-y-2">
                <!-- Item 1 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Qué
                            es un correo corporativo?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Es una dirección de correo que utiliza tu propio nombre de dominio (ejemplo:
                            info@tuempresa.com) en lugar de un servicio genérico como @gmail.com o @outlook.com. Esto
                            proyecta seriedad, seguridad y confianza a tus clientes.
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Necesito
                            un sitio web?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            No es obligatorio. Puedes tener tus correos corporativos activos sin necesidad de diseñar o
                            publicar una página web. Sin embargo, tener el dominio registrado es el primer paso para
                            cuando decidas crear tu sitio en el futuro.
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Qué
                            está incluido?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            El paquete incluye el registro del dominio (.com, .net, etc.), el hosting especializado para
                            correo, la creación de las cuentas, configuración de seguridad (SPF, DKIM, DMARC) y soporte
                            técnico para la vinculación en tus dispositivos.
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Qué
                            no está incluido?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            No incluimos diseño web, gestión de redes sociales, ni campañas de marketing digital. Nos
                            enfocamos exclusivamente en la infraestructura técnica de tu comunicación por correo
                            electrónico para garantizar la máxima entregabilidad.
                        </p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Tiempo
                            de entrega?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Una vez confirmado el pago y elegido el nombre del dominio, tus cuentas están listas en un
                            periodo de 4 a 24 horas, dependiendo de la propagación de los DNS a nivel global.
                        </p>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Cuántos
                            correos puedo tener?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Depende del plan contratado. Ofrecemos desde planes básicos de 1 a 5 correos hasta
                            soluciones empresariales ilimitadas según la capacidad de almacenamiento que requieras.
                        </p>
                    </div>
                </div>
                <!-- Item 7 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Qué
                            es un alias?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Un alias es una dirección "fantasma" que redirige a una cuenta principal. Por ejemplo,
                            puedes tener ventas@tuempresa.com como alias de juan@tuempresa.com. Recibes todos los
                            correos en un mismo buzón sin costo adicional.
                        </p>
                    </div>
                </div>
                <!-- Item 8 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Puedo
                            usar Gmail/Outlook/Móvil?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            ¡Sí! Nuestras cuentas son compatibles con cualquier cliente de correo mediante protocolos
                            IMAP/POP3. Te proporcionamos las guías paso a paso para que las configures en tu iPhone,
                            Android, Outlook o incluso Gmail gratuito.
                        </p>
                    </div>
                </div>
                <!-- Item 9 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Quién
                            compra/paga el dominio y hosting?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Nosotros nos encargamos de toda la gestión administrativa y técnica. El precio que pagas ya
                            incluye la renovación anual de estos servicios para que no tengas que preocuparte por
                            trámites complejos.
                        </p>
                    </div>
                </div>
                <!-- Item 10 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Qué
                            pasa si no renuevo?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Si el servicio no se renueva antes de su fecha de vencimiento, las cuentas de correo dejarán
                            de funcionar y el dominio volverá a estar disponible para el público después de un periodo
                            de gracia. Te avisamos con 30 días de antelación.
                        </p>
                    </div>
                </div>
                <!-- Item 11 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Añadir
                            más correos después?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Claro. Tu infraestructura es escalable. Puedes empezar con un plan de 2 correos y escalar a
                            10 o 50 en cualquier momento pagando únicamente la diferencia proporcional de tu plan.
                        </p>
                    </div>
                </div>
                <!-- Item 12 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Contraseña
                            olvidada?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Como administrador de tu servicio, tienes acceso a un panel de control donde puedes resetear
                            contraseñas. Si tienes problemas, nuestro soporte técnico puede hacerlo por ti en minutos
                            tras una verificación de identidad.
                        </p>
                    </div>
                </div>
                <!-- Item 13 -->
                <div class="accordion-item border-b border-outline-variant transition-colors duration-200">
                    <button class="w-full flex items-center justify-between py-6 px-4 text-left group"
                        onclick="toggleAccordion(this)">
                        <span
                            class="font-headline-md text-[20px] text-primary group-hover:text-primary-container transition-colors">¿Cambiar
                            de proveedor?</span>
                        <span
                            class="material-symbols-outlined chevron-icon transition-transform duration-300 text-outline">expand_more</span>
                    </button>
                    <div class="accordion-content px-4">
                        <p class="text-on-surface-variant leading-relaxed">
                            Eres libre de migrar cuando quieras. Te entregamos el código de transferencia (Auth-Code) de
                            tu dominio y te asistimos en la exportación de tus correos si decides moverte a otra
                            plataforma. Sin ataduras.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="bg-surface-container-high py-24">
        <div class="max-w-4xl mx-auto px-margin-mobile text-center">
            <div class="inline-block p-4 rounded-full bg-secondary-container mb-8">
                <span class="material-symbols-outlined text-on-secondary-container text-4xl">rocket_launch</span>
            </div>
            <h2 class="font-headline-lg text-headline-lg text-primary mb-6">¿Listo para transformar tu marca?</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-2xl mx-auto">
                Únete a miles de profesionales que ya confían en EmailCorp para su comunicación diaria. Sin
                configuraciones complicadas, nosotros lo hacemos por ti.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                <button
                    class="w-full md:w-auto bg-[#25D366] text-white px-10 py-4 rounded-xl font-bold text-lg hover:opacity-90 shadow-lg active:scale-95 transition-all">
                    Hablar con un Experto
                </button>
                <button
                    class="w-full md:w-auto border-2 border-primary text-primary px-10 py-4 rounded-xl font-bold text-lg hover:bg-primary hover:text-white transition-all">
                    Ver Planes de Precios
                </button>
            </div>
        </div>
    </section> 
</div>

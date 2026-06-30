<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<x-layouts.index>

    <section
        class="relative overflow-hidden py-section-padding px-margin-mobile md:px-gutter max-w-container-max mx-auto"
        id="inicio">
        <div class="text-center mb-stack-lg max-w-3xl mx-auto">
            <h1 class="font-headline-xl text-headline-xl text-primary mb-stack-sm md:text-headline-xl">Contáctanos</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Estamos aquí para resolver tus dudas técnicas y
                ayudarte a configurar tu infraestructura de correo profesional.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-start">
            <!-- Side Column: Info & Stats -->
            <div class="md:col-span-4 space-y-gutter order-2 md:order-1">
                <!-- WhatsApp Primary Action -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg contact-card-shadow transition-transform hover:-translate-y-1">
                    <h3 class="font-headline-md text-headline-md text-primary mb-stack-sm">Soporte Inmediato</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-stack-md">La forma más rápida de
                        obtener
                        asistencia técnica directa con nuestros expertos.</p>
                    <a class="flex items-center justify-center gap-3 w-full bg-[#25D366] text-white py-4 rounded-lg font-bold text-lg shadow-sm hover:opacity-90 active:scale-95 transition-all"
                        href="https://wa.me/1234567890">
                        <span class="material-symbols-outlined text-2xl"
                            style="font-variation-settings: 'FILL' 1;">chat_bubble</span>
                        Hablar por WhatsApp
                    </a>
                </div>
                <!-- Response Time & Hours -->
                <div
                    class="bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg contact-card-shadow">
                    <div class="flex items-start gap-4 mb-stack-lg">
                        <div
                            class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                            <span class="material-symbols-outlined">schedule</span>
                        </div>
                        <div>
                            <h4 class="font-label-sm text-label-sm uppercase text-on-surface-variant">Tiempo de
                                respuesta
                            </h4>
                            <p class="font-headline-md text-headline-md text-primary">&lt; 45 minutos</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">Promedio en horario laboral.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
                            <span class="material-symbols-outlined">event_available</span>
                        </div>
                        <div>
                            <h4 class="font-label-sm text-label-sm uppercase text-on-surface-variant">Horario de oficina
                            </h4>
                            <p class="font-body-md text-body-md text-on-surface-variant font-semibold">Lunes a Viernes
                            </p>
                            <p class="font-body-md text-body-md text-on-surface-variant">09:00 — 19:00 (GMT-5)</p>
                        </div>
                    </div>
                </div>
                <!-- Visual Element: Office/Tech -->
                <div class="relative h-64 rounded-xl overflow-hidden contact-card-shadow">
                    <div class="absolute inset-0 bg-primary/20 z-10 flex items-end p-stack-md">
                        <p
                            class="text-white font-label-sm text-label-sm bg-primary/60 backdrop-blur-md px-3 py-1 rounded-full">
                            Nuestra sede central</p>
                    </div>
                    <div class="w-full h-full bg-cover bg-center"
                        data-alt="A clean, minimalist high-tech corporate office interior with sleek white desks, ergonomic chairs, and large glass windows. The lighting is bright and airy, reflecting a modern corporate minimalism style with blue-tinted shadows and pristine surfaces. Professional atmosphere with a focus on organization and efficiency."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDAEEgTsqWAcBg382eVr1L-UFe772t7EtVGjTHp2LUnGIpWWnv9iVhWDi0yqIqRVSOtmN76ZA8mNAa-Inz8iwAqlVPtLtZ2YsEiiMhVu1bW0xUTBEkcTKyP3Wbhq1-kcK30lqcLgHhuawv-L3eHniO8Ao04jgC2JPSoirqgmO7hwXtrLq3mynx9_J6pAwNDaDsI7O6ewxOXrjBEjxojSo_s7-SFX3Vgxu_tYqq9L65ece_iRjqAtFjblPYYGjy-vBvRMa34KKTVLO0V')">
                    </div>
                </div>
            </div>
            <!-- Main Column: Contact Form -->
            <div
                class="md:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-xl p-stack-lg md:p-12 contact-card-shadow order-1 md:order-2">
                <form class="space-y-6" id="contactForm">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="font-label-sm text-label-sm text-on-surface-variant block"
                                for="name">Nombre
                                Completo</label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all placeholder:text-on-surface-variant/40"
                                id="name" name="name" placeholder="Ej. Juan Pérez" required=""
                                type="text">
                        </div>
                        <div class="space-y-2">
                            <label class="font-label-sm text-label-sm text-on-surface-variant block"
                                for="email">Correo
                                Electrónico</label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all placeholder:text-on-surface-variant/40"
                                id="email" name="email" placeholder="juan@empresa.com" required=""
                                type="email">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block" for="subject">Asunto
                            de la
                            consulta</label>
                        <select
                            class="w-full px-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all appearance-none cursor-pointer"
                            id="subject" name="subject">
                            <option value="soporte">Soporte Técnico</option>
                            <option value="ventas">Ventas y Cotizaciones</option>
                            <option value="billing">Facturación</option>
                            <option value="other">Otro asunto</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block"
                            for="message">Mensaje</label>
                        <textarea
                            class="w-full px-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all placeholder:text-on-surface-variant/40 resize-none"
                            id="message" name="message" placeholder="¿Cómo podemos ayudarte hoy?" required="" rows="5"></textarea>
                    </div>
                    <div class="pt-2">
                        <button
                            class="w-full md:w-auto px-12 py-4 bg-primary text-on-primary rounded-lg font-bold text-lg hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-2"
                            type="submit">
                            Enviar mensaje
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                </form>
                <!-- Status Message Placeholder -->
                <div class="hidden mt-6 p-4 rounded-lg bg-secondary-container text-on-secondary-container flex items-center gap-3"
                    id="formStatus">
                    <span class="material-symbols-outlined">check_circle</span>
                    <p class="font-body-md text-body-md">¡Gracias! Hemos recibido tu mensaje y te contactaremos en
                        breve.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- Hero Title -->


</x-layouts.index>

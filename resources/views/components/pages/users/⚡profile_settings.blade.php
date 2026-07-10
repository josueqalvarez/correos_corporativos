<?php

use Livewire\Component;
use Livewire\Attributes\Layout;

new class extends Component {
    #[Layout('layouts.index')]
};
?>

<div class="max-w-[1280px] mx-auto p-margin-x md:p-12 space-y-stack-lg">
    <!-- Page Header -->
    <section class="mb-stack-lg">
        <h1 class="font-headline-lg text-headline-lg text-primary mb-2">Ajustes</h1>
        <p class="text-on-surface-variant font-body-base text-body-base">Administra las preferencias de tu cuenta y la
            seguridad del sistema.</p>
    </section>
    <!-- Settings Grid Layout -->
    <div class="lg:col-span-7 space-y-8">
        <!-- Card: Cambiar contraseña -->
        <div class="glass-card rounded-3xl p-8 shadow-sm">
            <div class="flex items-center gap-3 mb-6">
                <span class="material-symbols-outlined text-primary" data-icon="lock_reset">lock_reset</span>
                <h2 class="font-bold text-xl">Cambiar contraseña</h2>
            </div>
            <form class="space-y-4">
                <div>
                    <label
                        class="block text-xs font-label-mono uppercase tracking-wider text-on-surface-variant mb-2">Contraseña
                        actual</label>
                    <input
                        class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary outline-none transition-all"
                        placeholder="••••••••" type="password" />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label
                            class="block text-xs font-label-mono uppercase tracking-wider text-on-surface-variant mb-2">Nueva
                            contraseña</label>
                        <input
                            class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary outline-none transition-all"
                            placeholder="••••••••" type="password" />
                    </div>
                    <div>
                        <label
                            class="block text-xs font-label-mono uppercase tracking-wider text-on-surface-variant mb-2">Confirmar
                            contraseña</label>
                        <input
                            class="w-full bg-surface-container-lowest border border-outline-variant/40 rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary outline-none transition-all"
                            placeholder="••••••••" type="password" />
                    </div>
                </div>
                <div class="pt-4">
                    <button
                        class="bg-primary text-on-primary font-bold px-8 py-3 rounded-full hover:shadow-lg transition-all active:scale-[0.98]"
                        type="button">
                        Actualizar contraseña
                    </button>
                </div>
            </form>
        </div>
        <!-- Card: Zona de peligro -->
        <div
            class="bg-error-container/30 border border-error/10 rounded-3xl p-8 transition-all hover:bg-error-container/50">
            <div class="flex items-center gap-3 mb-4">
                <span class="material-symbols-outlined text-error" data-icon="warning">warning</span>
                <h2 class="font-bold text-xl text-error">Zona de peligro</h2>
            </div>
            <p class="text-sm text-on-error-container mb-6">
                Una vez que elimines tu cuenta, no hay vuelta atrás. Por favor, asegúrate antes de proceder.
            </p>
            <button
                class="w-8/12 bg-white border-2 border-error text-error font-bold py-3 rounded-xl hover:bg-error hover:text-on-error transition-all duration-300">
                Eliminar cuenta
            </button>
        </div>


    </div>
    <!-- Footer Stats / Meta -->
    <div
        class="pt-stack-lg border-t border-outline-variant/20 flex flex-col md:flex-row justify-between items-center gap-4 text-on-surface-variant text-xs font-label-mono uppercase tracking-widest">
        <div class="flex items-center gap-4">
            <span>Versión de API: 2.4.1-stable</span>
            <span class="w-1 h-1 bg-outline rounded-full"></span>
            <span>Región: EU-West-1</span>
        </div>
        <div>
            Último acceso: Hace 12 minutos desde Madrid, ES
        </div>
    </div>
</div>

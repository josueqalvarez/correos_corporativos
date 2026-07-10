<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;

new class extends Component {
    #[Layout('layouts.index')]
    public User $user;

    public string $new_name = '';
    public string $new_lastname = '';
    public string $new_email = '';
    public string $new_phone = '';

};
?>

<!-- CONTENT CANVAS -->
<div class="max-w-container-max mx-auto py-stack-lg">
    <!-- Page Header -->
    <div class="mb-stack-lg">
        <h2 class="font-headline-lg text-headline-lg text-on-surface">Datos personales</h2>
        <p class="font-body-base text-body-base text-on-surface-variant mt-2">Actualiza la información básica de tu
            cuenta.</p>
    </div>
    <!-- Bento Layout / Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Main Form Section (Bento Large) -->
        <div class="lg:col-span-8">
            <div class="bg-surface-container-lowest rounded-3xl p-8 shadow-sm border border-outline-variant/20">
                <form class="space-y-6">
                    <div class="flex gap-6">
                        {{-- Imagen de perfil --}}
                        <div class="flex flex-col items-center gap-4 w-64">
                            <img class=" w-32 h-32 rounded-full object-cover"
                                src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                alt="Profile Picture" />
                            <div class="flex flex-col gap-2">
                                <button
                                    class="mt-2 bg-primary text-on-primary font-bold rounded-full px-6 py-2 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-soft"
                                    type="button">Cambiar foto</button>
                                <button
                                    class="mt-2 bg-error text-on-error font-bold rounded-full px-6 py-2 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-soft"
                                    type="button">Eliminar foto</button>
                            </div>
                        </div>
                        {{-- Informacion personal --}}
                        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Field: Nombre -->
                            <div class="space-y-2">
                                <label
                                    class="font-label-mono text-label-mono text-on-surface-variant block">NOMBRE</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    placeholder="{{ $user->name }}" type="text" wire:model="new_name" />
                            </div>
                            <!-- Field: Apellido -->
                            <div class="space-y-2">
                                <label
                                    class="font-label-mono text-label-mono text-on-surface-variant block">APELLIDO</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    placeholder="Introduce tu apellido" type="text" value="Morgan" />
                            </div>
                            <!-- Field: Correo electrónico -->
                            <div class="space-y-2">
                                <label class="font-label-mono text-label-mono text-on-surface-variant block">CORREO
                                    ELECTRÓNICO</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    placeholder="{{ $user->email }}" type="email" wire:model="new_email" />
                            </div>
                            <!-- Field: Teléfono -->
                            <div class="space-y-2">
                                <label
                                    class="font-label-mono text-label-mono text-on-surface-variant block">TELÉFONO</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    placeholder="+1 000 000 000" type="tel" value="+1 (555) 000-1234" />
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 border-t border-outline-variant/10 flex justify-end">
                        <button
                            class="bg-primary text-on-primary font-bold rounded-full px-10 py-3 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-soft"
                            type="button">
                            Guardar cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Profile Insights (Bento Side) -->
        <div class="lg:col-span-4 space-y-6">
            <!-- Status Card -->
            <div
                class="bg-secondary-container/30 rounded-3xl p-6 border border-secondary/10 relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="font-label-mono text-label-mono text-secondary mb-4">ESTADO DE LA CUENTA</h3>
                    <div class="flex items-center gap-3">
                        <span class="w-3 h-3 bg-success-teal rounded-full animate-pulse"></span>
                        <span class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface">Activa</span>
                    </div>
                    <p class="text-sm text-on-surface-variant mt-2">Nivel de seguridad: Enterprise</p>
                </div>
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-soft">
                    <span class="material-symbols-outlined text-6xl">verified_user</span>
                </div>
            </div>
            <!-- Details Card -->
            <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm border border-outline-variant/20">
                <h3 class="font-label-mono text-label-mono text-on-surface-variant mb-6">DETALLES DE ACCESO</h3>
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xs text-on-surface-variant">Fecha de registro</p>
                            <p class="font-body-base text-body-base font-medium">12 Oct 2022</p>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant/50">calendar_today</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xs text-on-surface-variant">Último acceso</p>
                            <p class="font-body-base text-body-base font-medium">Hace 14 minutos</p>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant/50">history</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xs text-on-surface-variant">IP de sesión</p>
                            <p class="font-body-base text-body-base font-medium">192.168.1.45</p>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant/50">lan</span>
                    </div>
                </div>
            </div>
            <!-- Decorative Micro-Animation Area -->
            <div class="relative h-32 rounded-3xl overflow-hidden glass-card">

                <div class="absolute inset-0 flex items-center justify-center">
                    <p class="font-label-mono text-label-mono text-primary font-bold opacity-70">SYSTEM SECURE</p>
                </div>
            </div>
        </div>
    </div>
</div>

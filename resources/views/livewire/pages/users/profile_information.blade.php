<!-- CONTENT CANVAS -->
<div class="page-shell py-stack-lg">
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
                <form class="space-y-6" wire:submit.prevent="actualizar_datos">
                    <div class="flex flex-col gap-8 lg:flex-row">
                        {{-- Imagen de perfil --}}
                        <div class="flex w-full flex-col items-center gap-4 lg:w-64">
                            {{-- Renderizado de foto de perfil o iniciales del nombre --}}
                            <div
                                class="flex h-36 w-36 shrink-0 items-center justify-center rounded-full bg-primary text-lg font-bold text-on-primary sm:h-44 sm:w-44 lg:h-48 lg:w-48">
                                @if ($profile_photo && $profile_photo->isPreviewable())
                                    <img src="{{ $profile_photo->temporaryUrl() }}" alt="Profile Picture"
                                        class="h-full w-full rounded-full object-cover" />
                                @elseif ($user->image)
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="Profile Picture"
                                        class="h-full w-full rounded-full object-cover" />
                                @else
                                    {{ strtoupper(substr($user->name, 0, 2)) }}
                                @endif
                            </div>

                            {{-- Botones de interaccion con la foto de perfil --}}
                            <div class="flex w-full flex-col gap-2 sm:w-auto">

                                <input class="hidden" type="file" id="profile_photo" wire:model="profile_photo"
                                    accept=".jpg,.jpeg,.png,.webp,.gif" />
                                <button
                                    class="mt-2 bg-primary text-on-primary font-bold rounded-full px-6 py-2 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-soft"
                                    type="button" onclick="document.getElementById('profile_photo').click()">
                                    {{ $user->image || $profile_photo ? 'Cambiar foto' : 'Subir foto' }}
                                </button>
                                @error('profile_photo')
                                    <p class="max-w-full text-center text-sm text-error sm:max-w-64 lg:text-left">{{ $message }}</p>
                                @enderror
                                @if ($profile_photo)
                                    <button
                                        class="mt-2 bg-gray-500 text-on-primary font-bold rounded-full px-6 py-2 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-soft"
                                        type="button" wire:click="borrar_foto"> Quitar foto seleccionada
                                    </button>
                                @endif
                                @if ($user->image)
                                    <button
                                        class="mt-2 bg-error text-on-error font-bold rounded-full px-6 py-2 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] transition-soft"
                                        type="button" wire:click="borrar_foto"> Borrar foto</button>
                                @endif

                            </div>
                        </div>
                        {{-- Informacion personal --}}
                        <div class="flex-1 grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Field: Nombre -->
                            <div class="space-y-2">
                                <label
                                    class="font-label-mono text-label-mono text-on-surface-variant block">NOMBRE</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    type="text" wire:model="new_name" />
                            </div>
                            <!-- Field: Apellido -->
                            <div class="space-y-2">
                                <label
                                    class="font-label-mono text-label-mono text-on-surface-variant block">APELLIDO</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    placeholder="Introduce tu apellido" type="text" wire:model="new_lastname" />
                            </div>
                            <!-- Field: Correo electrónico -->
                            <div class="space-y-2">
                                <label class="font-label-mono text-label-mono text-on-surface-variant block">CORREO
                                    ELECTRÓNICO</label>
                                <p
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base">
                                    {{ $user->email }}</p>
                            </div>
                            <!-- Field: Teléfono -->
                            <div class="space-y-2">
                                <label
                                    class="font-label-mono text-label-mono text-on-surface-variant block">TELÉFONO</label>
                                <input
                                    class="w-full bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-transparent transition-soft font-body-base text-body-base"
                                    placeholder="Introduce tu teléfono" type="tel" wire:model="new_phone" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-end gap-4 border-t border-outline-variant/10 pt-6 sm:flex-row sm:justify-between">
                        <button
                            class="w-full rounded-full bg-primary px-10 py-3 font-bold text-on-primary shadow-lg transition-soft hover:scale-[1.02] hover:shadow-xl active:scale-[0.98] sm:w-auto"
                            type="submit">
                            Guardar cambios
                        </button>
                        @if (session()->has('message'))
                            <p class="flex items-center gap-2 text-center text-sm font-medium text-success sm:ml-4 sm:text-left">
                                {{ session('message') }}
                            </p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <!-- Profile Insights (Bento Side) -->
        <div class="lg:col-span-4 space-y-6">

            <!-- Details Card -->
            <div class="bg-surface-container-lowest rounded-3xl p-6 shadow-sm border border-outline-variant/20">
                <h3 class="font-label-mono text-label-mono text-on-surface-variant mb-6">DETALLES DE ACCESO</h3>
                <div class="space-y-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xs text-on-surface-variant">Fecha de registro</p>
                            <p class="font-body-base text-body-base font-medium">{{ $user->created_at->format('d M Y') }}</p>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant/50">calendar_today</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
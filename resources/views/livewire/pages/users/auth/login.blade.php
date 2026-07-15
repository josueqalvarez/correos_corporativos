<div class="w-full max-w-xl mx-auto px-4 sm:px-6 md:px-8 py-8 md:py-12 lg:py-16">
    <div
        class="bg-surface-container-lowest rounded-[1.75rem] shadow-xl p-6 sm:p-8 md:p-10 border border-outline-variant/20 relative">
        <!-- Logo Mobile/Small Screens -->
        <div class="md:hidden mb-stack-md flex justify-center">
            <h1 class="font-headline-lg text-headline-lg font-black text-primary flex items-center gap-2">
                <span class="material-symbols-outlined" data-icon="mail">mail</span>
                MailCore
            </h1>
        </div>
        <!-- Header Section -->
        <div class="text-center mb-stack-lg">
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Bienvenido de nuevo</h2>
            <p class="font-body-base text-body-base text-on-surface-variant">Ingresa a tu panel de configuración</p>
        </div>
        <!-- Form -->
        <form action="#" class="space-y-stack-md flex flex-col items-center" method="POST"
            wire:submit.prevent="login">
            <!-- Email Field -->
            <div class="space-y-1">
                <label
                    class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-wider block ml-1"
                    for="email">Email</label>
                <div class="relative ">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant"
                        data-icon="alternate_email">alternate_email</span>
                    <input
                        class="w-full pl-12 pr-4 py-4 rounded-xl border-outline-variant bg-surface-container-low text-body-base focus:bg-white transition-all duration-200 "
                        id="email" placeholder="nombre@mailcorp.pe" required="" type="email"
                        wire:model="email" />
                    @error('email')
                        <span class="text-sm text-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Password Field -->
            <div class="space-y-1">
                <label
                    class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-wider block ml-1"
                    for="password">Contraseña</label>
                <div class="relative">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant"
                        data-icon="lock">lock</span>
                    <input
                        class="w-full pl-12 pr-12 py-4 rounded-xl border-outline-variant bg-surface-container-low text-body-base focus:bg-white transition-all duration-200"
                        id="password" placeholder="••••••••" required=""
                        type="{{ $passwordVisible ? 'text' : 'password' }}" wire:model="password" />
                    <button
                        class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors cursor-pointer"
                        type="button" wire:click="$toggle('passwordVisible')">
                        <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                    </button>
                    @error('password')
                        <span class="text-sm text-error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Helper Actions -->
            <div class="flex items-center gap-2 text-center py-2">
                <label class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative">
                        <input class="peer sr-only" type="checkbox" wire:model="remember" />
                        <div
                            class="w-5 h-5 rounded border-2 border-outline-variant peer-checked:bg-primary peer-checked:border-primary transition-all duration-200 flex items-center justify-center">
                            <span
                                class="material-symbols-outlined text-white text-xs opacity-0 peer-checked:opacity-100"
                                data-icon="check" style="font-variation-settings: 'wght' 700">check</span>
                        </div>
                    </div>
                    <span
                        class="text-label-mono font-label-mono text-on-surface-variant group-hover:text-primary transition-colors">Recuérdame</span>
                </label>
                <a class="text-label-mono font-label-mono text-on-surface-variant hover:text-primary underline underline-offset-4 decoration-outline-variant transition-all"
                    href="#">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>
            <!-- Action Button -->
            <button
                class="w-full sm:w-8/12 py-3 bg-navy-container text-white rounded-full font-bold text-subheading hover:scale-[1.02] active:scale-95 transition-all duration-200 shadow-lg mt-stack-md flex items-center justify-center gap-3"
                type="submit" wire:click.prevent="login">
                Iniciar sesión
                <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
            </button>
        </form>
        <!-- Bottom Redirect -->
        <div class="mt-stack-lg pt-stack-md border-t border-outline-variant/30 text-center">
            <p class="text-body-base text-on-surface-variant">
                ¿No tienes cuenta?
                <a class="font-bold text-primary hover:underline underline-offset-4"
                    href=" {{ route('crear-cuenta') }} " wire:navigate>
                    Regístrate</a>
            </p>
        </div>
    </div>
</div>

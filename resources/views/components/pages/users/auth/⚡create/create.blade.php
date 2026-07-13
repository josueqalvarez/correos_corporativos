<div class="w-full max-w-xl mx-auto px-4 sm:px-6 md:px-8 py-8 md:py-12 lg:py-16">
    <div class="w-full max-auto max-w-120">
        <!-- Registration Card -->
        <div class="glass-card rounded-4xl p-stack-lg shadow-2xl relative overflow-hidden">
            <!-- Decorative background blur element -->
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-secondary-container/30 blur-[80px] rounded-full"></div>
            <div class="relative z-10">
                <div class="mb-stack-lg">
                    <span
                        class="font-label-mono text-label-mono text-secondary tracking-widest uppercase mb-2 block">Bienvenido</span>
                    <h1 class="font-headline-lg text-headline-lg text-primary mb-2">Crea tu cuenta</h1>
                    <p class="font-subheading text-subheading text-on-surface-variant">Comienza a profesionalizar tu
                        marca</p>
                </div>


                <form class="space-y-stack-md" wire:submit.prevent="create_user">
                    <!-- Full Name -->
                    <div class="space-y-2">
                        <label class="font-label-mono text-label-mono text-on-surface-variant px-1"
                            for="fullname">Nombre completo</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-sm">person</span>
                            <input
                                class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-xl font-body-base text-on-surface transition-all"
                                id="fullname" 
                                placeholder="Juan Pérez" type="text" 
                                wire:model="fullname"/>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="space-y-2">
                        <label class="font-label-mono text-label-mono text-on-surface-variant px-1"
                            for="email">Correo electrónico</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-sm">alternate_email</span>
                            <input
                                class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-xl font-body-base text-on-surface transition-all"
                                id="email" placeholder="hola@tuempresa.pe" type="email" wire:model="email"/>
                        </div>
                    </div>
                    <!-- Password Cluster -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                        <div class="space-y-2">
                            <label class="font-label-mono text-label-mono text-on-surface-variant px-1"
                                for="password">Contraseña</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-sm">lock</span>
                                <input
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-xl font-body-base text-on-surface transition-all"
                                    id="password" placeholder="••••••••" type="password" wire:model="password"/>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="font-label-mono text-label-mono text-on-surface-variant px-1"
                                for="confirm_password">Confirmar</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-sm">enhanced_encryption</span>
                                <input
                                    class="w-full h-14 pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-xl font-body-base text-on-surface transition-all"
                                    id="confirm_password" placeholder="••••••••" type="password" wire:model="password_confirmation" />
                            </div>
                        </div>
                    </div>
                    <!-- Terms & Conditions -->
                    <div class="flex items-start gap-3 pt-2">
                        <div class="relative flex items-center">
                            <input
                                class="w-5 h-5 rounded-md border-outline-variant text-secondary focus:ring-secondary cursor-pointer transition-all"
                                id="terms" type="checkbox" />
                        </div>
                        <label class="text-[14px] leading-tight text-on-surface-variant cursor-pointer select-none"
                            for="terms">
                            Acepto los <a class="text-secondary font-medium hover:underline underline-offset-4"
                                href="#">términos y condiciones</a> de uso de MailCore Peru.
                        </label>
                    </div>
                    <!-- Primary CTA -->
                    <button
                        class="w-full h-14 mt-stack-md bg-navy-container text-secondary-fixed font-bold rounded-full shadow-lg hover:shadow-xl active:scale-[0.98] transition-all flex items-center justify-center gap-2 group"
                        type="submit">
                        <span>Crear cuenta</span>
                        <span
                            class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </form>
                
                
                <div class="mt-8 pt-8 border-t border-outline-variant/30 flex flex-col items-center gap-4">
                    <p class="text-on-surface-variant text-sm">
                        ¿Ya tienes cuenta?
                        <a class="text-primary font-bold hover:text-secondary transition-colors underline-offset-4"
                            href="#">Inicia sesión</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Trust Badges / Footer Info -->
        <div
            class="mt-stack-lg flex justify-between items-center px-4 opacity-60 grayscale hover:grayscale-0 transition-all duration-700">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">shield_lock</span>
                <span class="text-[11px] font-label-mono">ISO 27001 SECURE</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">public</span>
                <span class="text-[11px] font-label-mono">GLOBAL INFRASTRUCTURE</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">verified_user</span>
                <span class="text-[11px] font-label-mono">PCI DSS COMPLIANT</span>
            </div>
        </div>
    </div>
</div>
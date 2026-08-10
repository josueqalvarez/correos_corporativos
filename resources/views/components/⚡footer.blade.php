<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<footer class="bg-surface-container-lowest dark:bg-surface-dim border-t border-outline-variant">
    <div
        class="w-full py-stack-lg px-margin-mobile md:px-8 max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="font-headline-md text-headline-md font-black text-primary dark:text-primary-fixed-dim">
            EmailCorp
        </div>
        <div class="flex gap-8">
            <a class="text-on-surface-variant hover:text-primary transition-colors underline font-label-sm text-label-sm"
                href="#inicio">Inicio</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors underline font-label-sm text-label-sm"
                href="#">Soporte</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors underline font-label-sm text-label-sm"
                href="#">Privacidad</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors underline font-label-sm text-label-sm"
                href="#">Términos</a>
        </div>
        <div class="text-on-surface dark:text-on-surface-variant font-label-sm text-label-sm">
            © 2024 EmailCorp. Todos los derechos reservados.
        </div>
    </div>
</footer>

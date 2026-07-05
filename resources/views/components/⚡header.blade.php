<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<!-- TopNavBar -->
<header class="fixed top-0 left-0 w-full z-50 bg-primary dark:bg-primary-container 
h-18">
    <div class="max-w-container-max mx-auto h-full flex items-center justify-between px-margin-mobile md:px-8">
        <div class="font-headline-md text-headline-md font-bold text-on-primary dark:text-on-primary-container">
            EmailCorp
        </div>
        <livewire:nav />

        <a class="bg-secondary text-on-secondary px-6 py-2 rounded-lg font-bold hover:scale-95 duration-150 transition-all font-label-sm text-label-sm"
            href="https://wa.me/yourlink">
            WhatsApp
        </a>
    </div>

    {{ $slot }}
</header>

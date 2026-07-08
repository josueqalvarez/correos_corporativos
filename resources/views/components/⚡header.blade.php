<?php

use Livewire\Component;

new class extends Component {

};
?>

<!-- TopNavBar -->
<header class="fixed top-0 left-0 w-full z-50 bg-primary dark:bg-primary-container 
h-18">
    <div class="max-w-container-max mx-auto h-full flex items-center justify-between px-margin-mobile md:px-8">
        <div class="font-headline-md text-headline-md font-bold text-on-primary dark:text-on-primary-container">
            EmailCorp
        </div>

        {{-- Navigation --}}
        <livewire:nav />

        <livewire:nav-user-state/>

    </div>

    {{ $slot }}
</header>

<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use App\Models\User;

new class extends Component {
    #[Layout('layouts.index')]
    public array $nav_options = [
        [
            'Title' => 'Activity',
            'Icon' => 'Analytics',
            'Content' => 'pages.users.profile_activity',
        ],
        [
            'Title' => 'Personal Data',
            'Icon' => 'Person',
            'Content' => 'pages.users.profile_information',
        ],
        [
            'Title' => 'Settings',
            'Icon' => 'Settings',
            'Content' => 'pages.users.profile_settings',
        ],
    ];

    #[Url]
    public string $tab = 'Activity';

    public User $user;

    public string $active_option = 'flex items-center gap-3 px-4 py-3 rounded-xl bg-on-tertiary-fixed-variant text-secondary-fixed font-bold border-l-4 border-secondary transition-all active:scale-95 duration-200';
    public string $inactive_option = 'flex items-center gap-3 px-4 py-3 text-on-tertiary-container hover:text-on-tertiary-fixed hover:bg-on-tertiary-fixed-variant/50 rounded-xl transition-colors active:scale-95 duration-200';

    public string $actual_content = '';
    public string $actual_option = '';

    public function cambiar_tab($tab)
    {
        $this->tab = $tab;

        foreach ($this->nav_options as $nav_option) {
            if ($nav_option['Title'] === $tab) {
                $this->actual_option = $tab;
                $this->actual_content = $nav_option['Content'];

                if ($tab !== 'Activity') {
                    $this->dispatch('borrar_page');
                }

                break;
            }
        }
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->cambiar_tab($this->tab);
    }
};
?>

<div class="min-h-screen bg-background">

    <div class="flex min-h-screen">
        <!-- Sidebar Shell -->
        <aside
            class="sticky top-18 z-10 h-[calc(100vh-4.5rem)] max-h-[calc(100vh-4.5rem)] w-64 shrink-0 overflow-y-auto bg-navy-container flex flex-col p-stack-md shadow-sm pb-24">

            <!-- User Profile Mini -->
            <div class="flex items-center gap-3 px-4 mb-10 pt-4">
                <div class="w-10 h-10 rounded-full overflow-hidden bg-surface-container-highest">
                    <img class="w-full h-full object-cover"
                        data-alt="Professional headshot of a corporate tech administrator for MailCore Peru, dressed in a sleek charcoal suit with a friendly and confident expression. The background is a soft-focus high-tech office with minimalist white and deep navy tones, lit with clean clinical light."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlzxauFP56St8f_poylwQDMOnLSrl5RREct3ssxtvETAblxnC4eTI95D7tNqhvdIP7yxOv-yYNzd2qInAhjG4h19vm7LG_ha4Nnohg5XC9MdEFuLkIg6CGE0YFX_QqGcieAhgqTn6fkkrEiMl_Y2X-Kr6LF-WDomozSBI_4e4oyqhrElu_V8-YgnX4BeyNmkYcnoacy7yGukcngmjkVcdceUi09bQKK6G2LwE8P9M8ZJ7pQ7zle7DRFQ" />
                </div>
                <span class="text-secondary-fixed font-bold text-sm">{{ $this->user->name }}</span>
            </div>
            <!-- Navigation Links -->
            <nav class="flex-1 space-y-2">
                <!-- Active State: Activity -->
                @foreach ($this->nav_options as $option)
                    <a class="cursor-pointer {{ $option['Title'] === $this->tab ? $active_option : $inactive_option }} "
                        wire:click.prevent="cambiar_tab('{{ $option['Title'] }}')">

                        <span class="material-symbols-outlined" data-icon="{{ $option['Icon'] }}">
                            {{ $option['Icon'] }}
                        </span>
                        <span>{{ $option['Title'] }}
                        </span>

                    </a>
                @endforeach


                <a class="flex items-center gap-3 px-4 py-3 text-on-tertiary-container hover:text-error transition-colors"
                    href="{{ route('home') }}" wire:navigate>
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    <span>Logout</span>
                </a>
            </nav>
            <!-- Bottom Actions -->

        </aside>
        <!-- section Content Canvas -->
        <section class="flex-1 min-h-screen bg-background pb-24 pt-6">
            <livewire:dynamic-component :component="$this->actual_content" :key="$this->actual_content" :user="$this->user" />
        </section>
    </div>
</div>

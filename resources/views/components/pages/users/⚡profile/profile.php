<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use App\Models\User;

new #[Layout('layouts.index')] class extends Component {
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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->cambiar_tab($this->tab);
    }
};

<div class="min-h-screen bg-background">

    <div class="flex min-h-screen flex-col lg:flex-row">
        <!-- Sidebar Shell -->
        <aside
            class="sticky top-18 z-10 hidden h-[calc(100vh-4.5rem)] max-h-[calc(100vh-4.5rem)] w-64 shrink-0 overflow-y-auto bg-navy-container p-stack-md shadow-sm pb-24 lg:flex lg:flex-col">

            <!-- User Profile Mini -->
            <div class="flex items-center gap-3 px-4 mb-10 pt-4">
                <div class="w-18 h-18 rounded-full overflow-hidden bg-surface-container-highest">
                    @if ($this->user->image)
                        <img class="w-full h-full object-cover"
                            data-alt="Professional headshot of a corporate tech administrator for MailCore Peru, dressed in a sleek charcoal suit with a friendly and confident expression. The background is a soft-focus high-tech office with minimalist white and deep navy tones, lit with clean clinical light."
                            src="{{ asset('storage/' . $this->user->image) }}" />
                    @else
                        <div
                            class="w-full h-full flex items-center justify-center text-on-surface-container-highest font-bold text-lg">
                            {{ strtoupper(substr($this->user->name, 0, 2)) }}
                        </div>
                    @endif
                </div>
                <span class="text-secondary-fixed font-bold text-lg">{{ $this->user->name }}</span>
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
                    wire:click.prevent="logout" wire:navigate>
                    <span class="material-symbols-outlined" data-icon="logout">logout</span>
                    <span>Logout</span>
                </a>
            </nav>
            <!-- Bottom Actions -->

        </aside>
        <!-- section Content Canvas -->
        <section class="flex-1 min-h-screen bg-background pb-24 pt-6">
            <div class="mobile-scroll-x border-b border-outline-variant/10 bg-white/70 px-margin-mobile py-3 lg:hidden">
                <div class="flex min-w-max gap-2">
                    @foreach ($this->nav_options as $option)
                        <button
                            class="rounded-full px-4 py-2 text-sm font-semibold transition-colors {{ $option['Title'] === $this->tab ? 'bg-primary text-on-primary' : 'bg-surface-container-low text-on-surface hover:bg-surface-container-high' }}"
                            type="button"
                            wire:click.prevent="cambiar_tab('{{ $option['Title'] }}')"
                        >
                            {{ $option['Title'] }}
                        </button>
                    @endforeach

                    <button
                        class="rounded-full px-4 py-2 text-sm font-semibold text-error transition-colors hover:bg-error/10"
                        type="button"
                        wire:click.prevent="logout"
                    >
                        Logout
                    </button>
                </div>
            </div>

            <livewire:dynamic-component :component="$this->actual_content" :key="$this->actual_content" :user="$this->user" />
        </section>
    </div>
</div>
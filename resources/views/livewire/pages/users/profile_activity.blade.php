<div>

    <!-- Content Body -->
    <div class="max-w-container-max mx-auto px-margin-x py-12">
        <!-- Page Heading -->
        <div class="mb-stack-lg">
            <h2 class="font-display-xl text-headline-lg font-black text-primary mb-2">Actividad reciente</h2>
            <p class="text-on-surface-variant font-subheading">Consulta tus comentarios y participación en el blog
                oficial de MailCore Peru.</p>
        </div>
        <!-- Bento Layout for Stats (Micro-context) -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-stack-lg">
            <div class="glass-card p-6 rounded-3xl shadow-sm">
                <p class="text-label-mono uppercase text-on-tertiary-container mb-1">Total Comentarios</p>
                <p class="text-headline-lg font-bold text-primary">{{ $user->comments->count() }}</p>
            </div>

            <div class="glass-card p-6 rounded-3xl shadow-sm bg-primary text-on-primary">
                <p class="text-label-mono uppercase opacity-70 mb-1">Última Actividad</p>
                <p class="text-subheading font-bold">
                    {{ $user->comments()->latest()->first()?->created_at?->diffForHumans() }}</p>
            </div>
        </div>
        <!-- Tabla de comentarios -->
        <div class="bg-white rounded-4xl shadow-sm overflow-hidden border border-outline-variant/20">
            <div class="space-y-4 p-4 md:hidden">
                @foreach ($this->registros() as $comment)
                    <article class="rounded-3xl border border-outline-variant/20 bg-surface-container-lowest p-4">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <div>
                                <p class="text-xs uppercase tracking-wide text-on-surface-variant">Comentario</p>
                                <p class="mt-1 text-sm italic text-primary">{{ $comment->content }}</p>
                            </div>
                            @if ($comment->parent_comment_id)
                                <span class="rounded-full bg-secondary/10 px-2 py-1 text-[11px] font-medium text-secondary">Otro comentario</span>
                            @else
                                <span class="rounded-full bg-primary/10 px-2 py-1 text-[11px] font-medium text-primary">Blog</span>
                            @endif
                        </div>

                        <div class="space-y-2 text-sm text-on-surface-variant">
                            <p><span class="font-semibold text-on-surface">Artículo:</span> {{ $comment->blog->title }}</p>
                            <p><span class="font-semibold text-on-surface">Fecha:</span> {{ $comment->created_at->format('d M, Y • H:i') }}</p>
                        </div>

                        <a class="mt-4 inline-flex items-center gap-1 text-sm font-bold text-secondary hover:underline"
                            href="{{ route('blog-articulo', $comment->blog->slug) }}" wire:navigate>
                            Ver en el blog <span class="material-symbols-outlined text-xs" data-icon="open_in_new">open_in_new</span>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="hidden overflow-x-auto md:block">
                <table class="w-full text-left border-collapse">
                    {{-- Columnas --}}
                    <thead>
                        <tr class="bg-surface-container-low border-b border-outline-variant/30">
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">COMENTARIO</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">ARTÍCULO DEL BLOG</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">FECHA Y HORA</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm">DIRIGIDO A</th>
                            <th class="px-8 py-5 font-bold text-on-surface-variant text-sm text-right">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        <!-- Registros -->
                        @foreach ($this->registros() as $comment)
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-8 py-6">
                                    <p class="text-primary font-medium line-clamp-1 italic">
                                        {{ $comment->content }}
                                    </p>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-secondary text-sm"
                                            data-icon="article">article</span>
                                        <span class="text-on-surface font-bold">{{ $comment->blog->title }}</span>
                                    </div>
                                </td>

                                <td class="px-8 py-6 text-on-surface-variant text-sm">
                                    {{ $comment->created_at->format('d M, Y • H:i') }}
                                </td>
                                <td>
                                    @if ($comment->parent_comment_id)
                                        <span
                                            class="bg-secondary/10 text-secondary font-medium text-xs px-2 py-1 rounded-full">Otro
                                            comentario</span>
                                    @else
                                        <span
                                            class="bg-primary/10 text-primary font-medium text-xs px-2 py-1 rounded-full">Blog</span>
                                    @endif
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <a class="text-secondary font-bold text-sm hover:underline flex items-center justify-end gap-1"
                                        href="{{ route('blog-articulo', $comment->blog->slug) }}" wire:navigate>
                                        Ver en el blog <span class="material-symbols-outlined text-xs"
                                            data-icon="open_in_new">open_in_new</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            @if ($this->registros()->hasPages())
                <div class="flex flex-col gap-4 bg-surface-container-low px-4 py-5 md:flex-row md:items-center md:justify-between md:px-8 md:py-6">
                    <span class="text-sm text-on-surface-variant">Mostrando {{ $this->registros()->firstItem() }} - {{ $this->registros()->lastItem() }} de {{ $this->registros()->total() }} comentarios</span>
                    <div class="mobile-scroll-x flex gap-2">
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant/30 text-on-surface hover:bg-white transition-colors"
                            wire:click="previousPage" @disabled($this->registros()->onFirstPage())>
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        @foreach ($this->registros()->getUrlRange(1, $this->registros()->lastPage()) as $page => $url)
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-xl 
                                    {{ $page == $this->registros()->currentPage() 
                                    ? 'bg-primary text-on-primary font-bold shadow-sm' 
                                    : 'border border-outline-variant/30 text-on-surface hover:bg-white transition-colors' }}"
                                wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                        @endforeach
                        
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-xl border border-outline-variant/30 text-on-surface hover:bg-white transition-colors"
                            wire:click="nextPage" @disabled(!$this->registros()->hasMorePages())>
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
            @endif
            
        </div>

    </div>
</div>
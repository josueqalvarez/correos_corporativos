<section class="mt-16 rounded-3xl border border-outline-variant/20 bg-surface-container-lowest p-8 md:p-10 shadow-sm">
    <div class="flex flex-col gap-3 md:justify-between">
        <h2 class="font-headline-lg text-headline-lg text-primary">Responde al blog</h2>
        <p class="mt-2 text-on-surface-variant">Comparte tu experiencia o deja un comentario útil para otros lectores.
        </p>
    </div>

    <div class="mt-8 space-y-6">
        <div class="rounded-2xl border border-outline-variant/20 bg-surface-container-low p-6">
            <div class="flex flex-col items-start gap-4">

                @foreach ($blog->comments()->where('parent_comment_id', null)->latest()->get() as $comment)
                    <article
                        class="w-full rounded-2xl border border-outline-variant/20 bg-surface-container-lowest p-4 md:p-5 shadow-sm">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary text-lg font-bold text-on-primary">
                                {{ strtoupper(substr($comment->user->name, 0, 2)) }}
                            </div>
                            <h3 class="font-bold text-primary">{{ $comment->user->name }}</h3>
                        </div>

                        <p class="mt-3 text-on-surface-variant">
                            {{ $comment->content }}
                        </p>

                        {{-- Escribir respuesta al comentario --}}
                        <div class="mt-4">
                            @if ($validar_comentario !== $comment->id)
                                <a class="inline-flex cursor-pointer rounded-full px-3 py-1.5 text-sm font-medium text-on-surface-variant transition-colors hover:bg-surface-container-high"
                                    wire:click.prevent="toggleReplyForm({{ $comment->id }})">
                                    Responder
                                </a>
                            @else
                                <div
                                    class="ml-6 mt-2 rounded-2xl border-l-2 border-primary/30 bg-surface-container-low p-4 md:ml-8">
                                    <textarea
                                        class="w-full rounded-2xl border border-outline-variant/30 bg-surface-container-lowest px-4 py-3 text-body-base outline-none ring-0 focus:border-secondary"
                                        id="blog-response" placeholder="Escribe una respuesta..." wire:model='content.{{ $comment->id }}'></textarea>
                                    <div class="mt-3 flex flex-wrap gap-3">
                                        <button
                                            class="rounded-full bg-primary px-4 py-2 font-bold text-on-primary transition-transform hover:scale-[1.01]"
                                            wire:click.prevent='save({{ $comment->id }})'>
                                            Responder
                                        </button>
                                        <button
                                            class="rounded-full bg-outline-variant/20 px-4 py-2 font-bold text-on-surface-variant transition-transform hover:scale-[1.01]"
                                            wire:click.prevent="toggleReplyForm({{ $comment->id }})">
                                            Cancelar
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>

                        {{-- Respuestas del comentario --}}
                        @if ($comment->replies()->exists())
                            <div class="mt-4 space-y-3 border-l-2 border-outline-variant/30 pl-4 md:ml-8 md:pl-6">
                                @foreach ($comment->replies()->latest()->get() as $reply)
                                    <div
                                        class="rounded-2xl border border-outline-variant/20 bg-surface-container-low p-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-primary text-sm font-bold text-on-primary">
                                                {{ strtoupper(substr($reply->user->name, 0, 2)) }}
                                            </div>
                                            <p class="text-sm font-semibold text-primary">{{ $reply->user->name }}</p>
                                        </div>
                                        <p class="mt-2 text-sm text-on-surface-variant">{{ $reply->content }}</p>
                                        @if ($reply->user_id === $user->id)
                                            <div class="mt-2 flex gap-3">
                                                <button
                                                    class="text-sm font-medium text-error transition-colors hover:text-error/80 cursor-pointer"
                                                    wire:click='delete({{ $reply->id }})'>
                                                    Eliminar
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </article>
                @endforeach

            </div>


        </div>

        {{-- Escribir comentario al blog --}}
        <div class="rounded-2xl border border-outline-variant/20 bg-surface-container-low p-6">
            <label class="mb-2 block font-bold text-primary" for="blog-response">
                Escribe un comentario al blog</label>
            <textarea
                class="min-h-28 w-full rounded-2xl border border-outline-variant/30 bg-surface-container-lowest px-4 py-3 text-body-base outline-none ring-0 focus:border-secondary"
                id="blog-response" placeholder="Escribe un comentario..." wire:model='content.blog'></textarea>
            <div class="mt-4 flex flex-col gap-3 sm:flex-row">
                <button
                    class="rounded-full bg-primary px-6 py-3 font-bold text-on-primary transition-transform hover:scale-[1.01]"
                    wire:click='save()'>
                    Comentar
                </button>
            </div>
        </div>


    </div>
</section>
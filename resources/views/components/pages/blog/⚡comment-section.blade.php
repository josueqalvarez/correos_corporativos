<?php

use Livewire\Component;
use App\Models\Comment;

new class extends Component {
    public $blog;
    public string $content = '';
    public ?int $parentCommentId = null;

    public function save()
    {
        if (!empty($this->content)) {
            Comment::create([
                'content' => $this->content,
                'user_id' => auth()->id(),
                'blog_id' => $this->blog->id, // Reemplaza con el ID del blog correspondiente
                'parent_comment_id' => $this->parentCommentId, // Si es un comentario principal, de lo contrario, asigna el ID del comentario padre
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->content = '';
        }
    }

    public bool $showReplyForm = false;

    public function toggleReplyForm(?int $parentCommentId = null)
    {
        $this->showReplyForm = !$this->showReplyForm;
        $this->parentCommentId = $parentCommentId;
    }
};
?>

<section class="mt-16 rounded-3xl border border-outline-variant/20 bg-surface-container-lowest p-8 md:p-10 shadow-sm">
    <div class="flex flex-col gap-3 md:justify-between">
        <h2 class="font-headline-lg text-headline-lg text-primary">Responde al blog</h2>
        <p class="mt-2 text-on-surface-variant">Comparte tu experiencia o deja un comentario útil para otros lectores.
        </p>
    </div>

    <div class="mt-8 space-y-6">
        <div class="rounded-2xl border border-outline-variant/20 bg-surface-container-low p-6">
            <div class="flex flex-col items-start gap-4">

                @foreach ($blog->comments()->latest()->get() as $comment)
                    <div class="rounded-2xl border border-outline-variant/20 bg-surface-container-lowest p-4 w-full">
                        <div class="flex items-center gap-4">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-lg font-bold text-on-primary">
                                {{ strtoupper(substr($comment->user->name, 0, 2)) }}
                            </div>
                            <h3 class="font-bold text-primary ">{{ $comment->user->name }}</h3>
                        </div>

                        <p class="mt-2 text-on-surface-variant">
                            {{ $comment->content }}
                        </p>
                    </div>

                    @if (!$showReplyForm)
                        <a class="text-sm text-on-surface-variant cursor-pointer" wire:click.prevent="toggleReplyForm({{ $comment->id }})">
                            Responder </a>
                    @else
                        <div
                            class="flex rounded-2xl border border-outline-variant/20 bg-surface-container-low p-6 w-full gap-4">
                            <textarea
                                class=" w-full rounded-2xl border border-outline-variant/30 bg-surface-container-lowest px-4 py-3 text-body-base outline-none ring-0 focus:border-secondary"
                                id="blog-response" placeholder="Escribe un comentario..." wire:model='content'></textarea>
                            <div class="flex gap-3 sm:flex-row">
                                <button
                                    class="rounded-full bg-primary px-4 font-bold text-on-primary transition-transform hover:scale-[1.01]"
                                    wire:click='save()'>
                                    Comentar
                                </button>
                                <button
                                    class="rounded-full bg-outline-variant/20 px-4 font-bold text-on-surface-variant transition-transform hover:scale-[1.01]"
                                    wire:click.prevent="toggleReplyForm">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    @endif

                    @if ($comment->replies()->exists())
                    @endif
                @endforeach

            </div>

            {{-- Respuesta a comentario plantilla --}}
            <div class="mt-4 rounded-2xl border border-outline-variant/20 bg-surface-container-lowest p-4">
                <p class="text-sm font-semibold text-primary">Respuesta a Karla Sevina</p>
                <p class="mt-2 text-sm text-on-surface-variant">Exactamente, mantenerlo ordenado desde el inicio evita
                    muchos problemas de entregabilidad y hace más sencilla la migración futura.
                </p>
            </div>
        </div>

        {{-- Comentario --}}
        <div class="rounded-2xl border border-outline-variant/20 bg-surface-container-low p-6">
            <label class="mb-2 block font-bold text-primary" for="blog-response">
                Escribe un comentario al blog</label>
            <textarea
                class="min-h-28 w-full rounded-2xl border border-outline-variant/30 bg-surface-container-lowest px-4 py-3 text-body-base outline-none ring-0 focus:border-secondary"
                id="blog-response" placeholder="Escribe un comentario..." wire:model='content'></textarea>
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

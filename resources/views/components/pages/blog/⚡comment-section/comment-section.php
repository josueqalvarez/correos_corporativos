<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Comment;
use App\Models\User;

new #[Layout('components.layouts.index')] class extends Component {
    public $blog;
    public User $user;
    public array $content = [];
    public ?int $validar_comentario = null;

    public function delete(int $commentId)
    {
        $comment = Comment::find($commentId);

        if ($comment && $comment->user_id === auth()->id()) {
            $comment->delete();
        }
    }
    public function save(?int $parentCommentId = null)
    {
        Comment::create([
            'content' => $this->content[$parentCommentId] ?? '',
            'user_id' => auth()->id(),
            'blog_id' => $this->blog->id, // Reemplaza con el ID del blog correspondiente
            'parent_comment_id' => $parentCommentId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->content[$parentCommentId] = '';

        $this->toggleReplyForm($parentCommentId);
    }

    public function toggleReplyForm(?int $parentCommentId = null)
    {
        $this->validar_comentario = $this->validar_comentario === $parentCommentId ? null : $parentCommentId;
    }

    public function mount($blog)
    {
        $this->blog = $blog;
        $this->user = auth()->user();
    }
};

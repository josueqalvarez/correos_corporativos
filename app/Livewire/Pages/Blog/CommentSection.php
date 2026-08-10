<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Comment;
use App\Models\User;

#[Layout('components.layouts.index')]
class CommentSection extends Component
{

    // Variables ==========================
    public $blog;
    public User $user;
    public array $content = [];
    public ?string $validar_comentario = null;
    public ?string $editar = null;

    // Methods ===========================
    public function delete(int $commentId)
    {
        $comment = Comment::find($commentId);

        if ($comment && $comment->user_id === $this->user->id) {
            $comment->delete();
        }
    }

    public function edit(string $replyId)
    {
        $this->editar = $this->editar === $replyId ? null : $replyId;

        $reply = Comment::find($replyId);
        $this->content[$replyId] = $reply->content;
    }

    public function save(?string $parentCommentId = null)
    {

        if (empty($this->content[$parentCommentId] ?? '')) {
            $this->addError('content.' . $parentCommentId, 'El comentario no puede estar vacío.');
            return;
        } else if (auth()->guest()) {
            return redirect()->route('login');
        }

        Comment::create([
            'content' => $this->content[$parentCommentId],
            'user_id' => auth()->id(),
            'blog_id' => $this->blog->id, // Reemplaza con el ID del blog correspondiente
            'parent_comment_id' => $parentCommentId === 'blog' ? null : $parentCommentId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->content[$parentCommentId] = '';

        $this->toggleReplyForm($parentCommentId);
    }

    public function actualizar(string $replyId)
    {
        if (empty($this->content[$replyId] ?? '')) {
            $this->addError('content.' . $replyId, 'El comentario no puede estar vacío.');
            return;
        }

        $reply = Comment::find($replyId);

        $reply->update([
            'content' => $this->content[$replyId],
            'updated_at' => now(),
        ]);

        $this->editar = null;
    }

    public function toggleReplyForm(?string $parentCommentId = null)
    {
        $this->validar_comentario = $this->validar_comentario === $parentCommentId ? null : $parentCommentId;
    }

    public function mount($blog)
    {
        $this->blog = $blog;
        if (auth()->check()) {
            $this->user = auth()->user();
        }
    }

    public function render()
    {
        return view('livewire.pages.blog.comment-section');
    }
}

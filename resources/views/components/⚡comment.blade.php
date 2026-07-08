<?php

use Livewire\Component;
use App\Models\Comment; 

new class extends Component {

    public $blog;

    public string $content = '';
    
    public function save()
    {
        if (!empty($this->content)) {            
            Comment::create([
                'content' => $this->content,
                'user_id' => auth()->id(),
                'blog_id' => $this->blog->id, // Reemplaza con el ID del blog correspondiente
                'parent_comment_id' => null, // Si es un comentario principal, de lo contrario, asigna el ID del comentario padre
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            $this->content = ''; 

        }
    }
};
?>

{{-- Comentario --}}


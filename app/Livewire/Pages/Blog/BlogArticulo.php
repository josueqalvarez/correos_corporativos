<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Blog;

#[Layout('components.layouts.index')]
class BlogArticulo extends Component
{
    
    
    /** @var array<int, array<string, mixed>> */
    public array $bd = [
        [
            'title' => 'Guía completa para configurar Zoho Mail con tu dominio propio',
            'category' => 'DNS & Configuración',
            'date' => '24 Mayo, 2024',
            'reading_time' => 5,
            'content' => 'Descubre cómo mover toda tu infraestructura de correo entre proveedores sin arriesgar la integridad de tu información histórica.',
            'description' => 'Aprende a dominar las mejores herramientas de comunicación empresarial. Guías expertas sobre Zoho Mail, Google Workspace y optimización de infraestructura DNS.',
            'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBp9aQbwuo3jjONEuoSSfPqwxbeliaUGH0hfdOkXL5dAEbi-pY-NZHh2Rayg_Hzxb15-xxAOaqxpbBW3d-Nm9HHOIsMtnf9k8IC7qBeS_qW7-Z8B9BhWN30oh012EVm_-D_kkSiVaV7IF3TupT8X4ddyDajrN7R5Ri1kfftwXA0ZpX1eH-yYtNrDJXlWkxLxsXxrkkKOgjR7uKe6KiFTDGXM00wz-rzBLpztvvnR5mH35A77P2a3S40EA',
        ],
    ];

    public ?Blog $blog_searched = null;
    
    public string $slug;

    public function mount(string $slug): void
    {
        $this->blog_searched = Blog::where('slug', $this->slug)->firstOrFail();
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.blog.blog-articulo');
    }
}

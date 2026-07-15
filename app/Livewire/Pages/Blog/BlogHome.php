<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Blog;

#[Layout('components.layouts.index')]
class BlogHome extends Component
{
    
    /** @var \Illuminate\Database\Eloquent\Collection<int, Blog> */
    public \Illuminate\Database\Eloquent\Collection $articulos;

    public function mount(): void
    {
        $this->articulos = Blog::where('is_published', true)->get();
    }

    public string $search_query = '';

    /** @var array<string, string> */
    public array $feature_article = [
        'title' => 'Cómo evitar que tus correos lleguen a spam: Guía DNS Definitiva',
        'category' => 'Seguridad',
        'time' => '12 de Octubre, 2024',
        'description' => 'Aprende a dominar las mejores herramientas de comunicación empresarial. Guías expertas sobre Zoho Mail, Google Workspace y optimización de infraestructura DNS.',
        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD8dvZP3NTGWU6MX7zKCY-f_9Dzrzbk77FIdwBefwCtkbcrM4jeTfLJEcxPqnQCdj5wbu50RH_K8gPEeotZni2Bj2Q-ncWPF92FOF5p4rSH8SeTcZyV4ecH1KKf6vOjDb-qEQZ8JYba2Lnb_ZaNequD_ai9xMjnXr6sEDPFo_RqtR9iwz_GZ7eTAQ8UN0krfxN6L2hdsTdZZSi-otGrZJHCjH72BkNSRoCd-ui_wDzAwxAKnsxodGhyWw',
    ];

    /** @var array<int, string> */
    public array $categories = ['Zoho Mail', 'Google Workspace', 'DNS', 'Seguridad', 'Productividad', 'Empresas'];

    /** @var array<int, array<string, string>> */
    public array $more_visited = [
        [
            'title' => 'Configuración SPF y DKIM paso a paso',
            'read_count' => '3.2k',
        ],
    ];

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.blog.blog-home');
    }
}

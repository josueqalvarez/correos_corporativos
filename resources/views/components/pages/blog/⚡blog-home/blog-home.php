<?php

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Blog;

new #[Layout('components.layouts.index')] class extends Component {
    
    public $articulos;

    public function mount()
    {
        $this->articulos = Blog::all()->where('is_published', true);
    }

    public string $search_query = '';

    public array $feature_article = [
        'title' => 'Cómo evitar que tus correos lleguen a spam: Guía DNS Definitiva',
        'category' => 'Seguridad',
        'time' => '12 de Octubre, 2024',
        'description' => 'Aprende a dominar las mejores herramientas de comunicación empresarial. Guías expertas sobre Zoho Mail, Google Workspace y optimización de infraestructura DNS.',
        'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD8dvZP3NTGWU6MX7zKCY-f_9Dzrzbk77FIdwBefwCtkbcrM4jeTfLJEcxPqnQCdj5wbu50RH_K8gPEeotZni2Bj2Q-ncWPF92FOF5p4rSH8SeTcZyV4ecH1KKf6vOjDb-qEQZ8JYba2Lnb_ZaNequD_ai9xMjnXr6sEDPFo_RqtR9iwz_GZ7eTAQ8UN0krfxN6L2hdsTdZZSi-otGrZJHCjH72BkNSRoCd-ui_wDzAwxAKnsxodGhyWw',
    ];

    public array $categories = ['Zoho Mail', 'Google Workspace', 'DNS', 'Seguridad', 'Productividad', 'Empresas'];

    public array $more_visited = [
        [
            'title' => 'Configuración SPF y DKIM paso a paso',
            'read_count' => '3.2k',
        ],
    ];
};

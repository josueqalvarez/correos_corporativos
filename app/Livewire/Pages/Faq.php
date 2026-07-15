<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.index')]
class Faq extends Component
{


    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.faq');
    }
}

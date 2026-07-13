<?php

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

new #[Layout('layouts.index')] class extends Component {
    public ?User $user;

    use WithPagination;

    public int $perPage = 2;
    #[Computed] 
    public function registros()
    {
        return $this->user->comments()->latest()->paginate($this->perPage);
    }
};

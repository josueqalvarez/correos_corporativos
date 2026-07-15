<?php

namespace App\Livewire\Pages\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

#[Layout('layouts.index')]
class ProfileActivity extends Component
{
    public ?User $user;

    use WithPagination;

    public int $perPage = 2;
    #[Computed] 
    public function registros(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return $this->user->comments()->latest()->paginate($this->perPage);
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.users.profile_activity');
    }
}

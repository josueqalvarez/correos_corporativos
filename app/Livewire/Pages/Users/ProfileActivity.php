<?php

namespace App\Livewire\Pages\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;
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
    public function registros()
    {
        return $this->user->comments()->latest()->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.pages.users.profile_activity');
    }
}

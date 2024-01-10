<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class UserList extends Component
{
    public \Illuminate\Database\Eloquent\Collection $users;

    public function __construct()
    {
        $this->users = User::all(); // Pobierz wszystkich użytkowników
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Support\Htmlable|\Closure|string|\Illuminate\Contracts\Foundation\Application
    {
        return view('components.user-list');
    }
}

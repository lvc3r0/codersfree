<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        $users = User::where('name', 'like', '%' . trim($this->search) . '%')
            ->orWhere('email', 'like', '%' . trim($this->search) . '%')
            ->paginate(8);

        return view('livewire.admin.users-index', compact('users'));
    }

    public function resetPage()
    {
        $this->reset('page');
    }
}

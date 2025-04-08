<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


// #[Layout('layout.app')]
#[Title('User Page')]
class UserPage extends Component
{
    use WithPagination;
    public User $user;
    //    public function mount(User $user)
    //    {
    //        $this->user = $user;
    //    }

    public $perPage = 5;
    public $search = '';
    public $userType = '';
    public function render()
    {
        $users = User::search($this->search)
                ->when($this->userType !== '', fn ($query) => $query->where('is_admin', $this->userType))
                ->paginate($this->perPage);
        // return view('livewire.user-page')->with('title', $users);
        return view('livewire.user-page', ['title' => 'User Page', 'users' => $users]);
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

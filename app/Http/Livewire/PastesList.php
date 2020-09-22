<?php

namespace App\Http\Livewire;

use App\Models\Paste;
use Livewire\Component;
use Livewire\WithPagination;

class PastesList extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.pastes-list', [
            'pastes' =>  $pastes = Paste::where(['private' => false, 'password' => null])->latest()->paginate(5),
        ]);
    }
}

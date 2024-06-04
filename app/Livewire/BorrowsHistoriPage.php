<?php

namespace App\Livewire;

use App\Models\Borrow;
use Livewire\Component;

class BorrowsHistoriPage extends Component
{
    public $borrows;

    public function mount()
    {
        $this->borrows = Borrow::where('user_id', auth()->id())->get();
    }

    public function render()
    {
        return view('livewire.borrows-histori-page', [
            'borrows' => $this->borrows,
        ]);
    }
}

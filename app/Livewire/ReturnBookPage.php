<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\borrow;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReturnBookPage extends Component
{
    public $borrow;
    public $actualReturn;

    public function mount($borrowId)
    {
        $this->borrow = borrow::with(['book', 'user'])->findOrFail($borrowId);

        if ($this->borrow->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }

    public function returnBook()
    {
        $this->validate([
            'actualReturn' => 'required|date',
        ]);

        $this->borrow->update([
            'actual_return' => $this->actualReturn,
            'returned_at' => Carbon::now(),
        ]);
        $book = Book::find($this->borrow->book_id);
        $book->quantity += 1;
        $book->save();

        session()->flash('success', 'Buku berhasil dikembalikan.');

        return redirect()->route('book-detail', ['id' => $this->borrow->book_id]);
    }

    public function render()
    {
        return view('livewire.return-book-page', ['book' => $this->borrow->book]);
    }
}

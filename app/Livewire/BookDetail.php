<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\borrow;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookDetail extends Component
{
    public $book;
    public $isBorrowed;
    public $borrow;

    public function mount($id)
    {
        $this->book = Book::with('author')->findOrFail($id);
        $this->borrow = borrow::where('book_id', $id)
            ->where('user_id', Auth::id())
            ->whereNull('returned_at')
            ->first();
        $this->isBorrowed = $this->borrow ? true : false;
    }

    public function borrowBook($bookId)
    {
        return redirect()->to('/borrows?book_id=' . $bookId);
    }
    public function render()
    {
        return view('livewire.book-detail', [
            'book' => $this->book,
            'borrow' => $this->borrow,
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookDetail extends Component
{
    public $book;

    public function mount($id)
    {
        $this->book = Book::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.book-detail', ['book' => $this->book]);
    }

    public function borrowBook($bookId)
    {
        return redirect()->to('/borrows?book_id='.$bookId);
    }
}

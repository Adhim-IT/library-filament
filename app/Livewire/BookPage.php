<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;

class BookPage extends Component
{

    public function render()
    {
        $categories = Category::all();
        $books = Book::all();
        return view('livewire.book-page' , [
            'books' => $books,
            'categories' => $categories
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Home')]
class HomePage extends Component
{
    public function render()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('livewire.home-page');
    }
}

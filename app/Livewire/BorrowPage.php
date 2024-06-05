<?php

namespace App\Livewire;

use App\Models\Author;
use App\Models\Book;
use App\Models\Borrow;
use Livewire\Component;
use Carbon\Carbon;

class BorrowPage extends Component
{
    public $bookId;
    public $borrowDate;
    public $returnDate;

    public function mount()
    {
        $this->bookId = request()->query('book_id');
        $this->borrowDate = Carbon::now()->toDateString();
        $this->returnDate = Carbon::now()->addDay()->toDateString();
    }

    public function pinjamBuku()
    {
        $book = Book::find($this->bookId);

        if ($book) {
            // Periksa apakah buku masih tersedia
            if ($book->quantity <= 0) {
                session()->flash('error', 'Maaf, buku tidak tersedia untuk dipinjam saat ini.');
            } else {
                // Periksa apakah pengguna sudah meminjam buku ini sebelumnya
                $previousBorrow = Borrow::where('user_id', auth()->id())
                    ->where('book_id', $this->bookId)
                    ->whereNull('returned_at') // Memeriksa apakah buku belum dikembalikan
                    ->first();

                if ($previousBorrow) {
                    session()->flash('error', 'Anda sudah meminjam buku ini sebelumnya.');
                } else {
                    // Jika buku tersedia dan belum pernah dipinjam, lakukan proses peminjaman
                    $book->decrement('quantity');
                    Borrow::create([
                        'user_id' => auth()->id(),
                        'book_id' => $this->bookId,
                        'borrowed_at' => now(),
                        'actual_return' => now()->addDays(1),
                    ]);
                    session()->flash('success', 'Buku berhasil dipinjam.');
                }
            }
        } else {
            session()->flash('error', 'Buku tidak ditemukan.');
        }
    }


    public function render()
    {
        $book = Book::with('author')->find($this->bookId);

        if (!$book) {
            return view('livewire.borrow-page', [
                'book' => null,
            ]);
        }

        return view('livewire.borrow-page', [
            'book' => $book,
            'author' => $book->author,
            'borrowDate' => $this->borrowDate,
            'returnDate' => $this->returnDate,
        ]);
    }
}

<div class=" bg-gray-950 py-40">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Judul Halaman -->
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-300">Detail Buku</h1>

        <div class="flex flex-col lg:flex-row items-center mb-12">
            <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
                <!-- Gambar Buku -->
                <img src="{{ url('storage', $book->cover) }}" alt="{{ $book->title }}" class="w-full h-auto rounded-lg shadow-lg">
            </div>
            <div class="w-full lg:w-2/3 lg:ml-8">
                <h2 class="text-2xl font-semibold text-gray-200 mb-4">{{ $book->title }}</h2>
                <p class="text-lg text-gray-200 mb-6">{{ $author->name }}</p>
                <div class="text-gray-200 lg:ml-8 max-h-96 overflow-auto pr-4">
                    <p class="text-gray-300 leading-relaxed mb-4">{!! Str::markdown($book->description) !!}</p>
                </div>
                <!-- Tombol Pinjam -->
                <button
                    id="pinjamButton"
                    wire:click="pinjamBuku"
                    class="bg-amber-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-amber-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 mt-10 ml-4"
                >
                    Pinjam Buku
                </button>
            </div>
        </div>

        <div class="bg-amber-400 p-8 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Detail Peminjaman</h3>
            <p class="text-gray-700 mb-2"><strong>Tanggal Peminjaman:</strong> {{ $borrowDate }}</p>
            <p class="text-gray-700 mb-2"><strong>Tanggal Pengembalian:</strong> {{ $returnDate }}</p>

            <!-- Logika untuk mengatur actual_return setelah 1 hari -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    let pinjamButton = document.querySelector('#pinjamButton');
                    if (pinjamButton) {
                        pinjamButton.addEventListener('click', function() {
                            let oneDayLater = new Date();
                            oneDayLater.setDate(oneDayLater.getDate() + 1);
                            let formattedDate = oneDayLater.toISOString().split('T')[0];
                            document.querySelector('#actualReturn').value = formattedDate;
                        });
                    }
                });
            </script>
        </div>
    </div>
</div>

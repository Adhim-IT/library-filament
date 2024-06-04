<div class="py-16 bg-gray-950">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Judul Halaman -->
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-300">Pengembalian Buku</h1>

        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="bg-red-500 text-white p-4 rounded-lg mb-6">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Detail Buku</h3>
            <div class="flex flex-col lg:flex-row items-center mb-12">
                <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
                    <!-- Gambar Buku -->
                    <img src="{{ url('storage', $book->cover) }}" alt="{{ $book->title }}" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="w-full lg:w-2/3 lg:ml-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ $book->title }}</h2>
                    <p class="text-lg text-gray-700 mb-6">{{ $book->author->name }}</p>
                    <div class="text-gray-200 lg:ml-8 max-h-96 overflow-auto pr-4">
                        <p class="text-gray-300 leading-relaxed mb-4">{!! Str::markdown($book->description) !!}</p>
                    </div>
                </div>
            </div>

            <h3 class="text-xl font-semibold text-gray-800 mb-4">Form Pengembalian</h3>
            <form wire:submit.prevent="returnBook">
                <div class="mb-4">
                    <label for="actualReturn" class="block text-gray-700 font-medium mb-2">Tanggal Pengembalian Aktual</label>
                    <input
                        type="date"
                        id="actualReturn"
                        wire:model="actualReturn"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>
                <button
                    type="submit"
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                >
                    Kembalikan Buku
                </button>
            </form>
        </div>
    </div>
</div>

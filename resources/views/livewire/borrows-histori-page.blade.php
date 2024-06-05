<div class="py-64">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-semibold mb-6 text-gray-300">Histori Peminjaman Buku</h1>

        @if($borrows->isEmpty())
            <p class="text-gray-300">Tidak ada histori peminjaman buku.</p>
        @else
            <div class="overflow-x-auto rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Cover</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Nama Buku</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Pinjam</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Kembali</th>
                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                        </tr>
                    </thead>
                    <tbody class="bg-amber-500 divide-y divide-gray-200">
                        @foreach($borrows as $borrow)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($borrow->book !== null && $borrow->book->cover !== null)
                                    <img src="{{ url('storage', $borrow->book->cover) }}" alt="{{ $borrow->book->title }}" class="w-16 h-auto">
                                @endif

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-200">{{ $borrow->book->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-200">{{ ($borrow->borrowed_at) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-200">
                                    @if($borrow->returned_at)
                                        {{ $borrow->returned_at }}
                                    @else
                                        Belum dikembalikan
                                    @endif
                                </td>

                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>

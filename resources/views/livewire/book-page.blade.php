<div class="py-40">
    <h1 class="text-3xl text-gray-200 text-center mb-32 font-bold">List book</h1>
    <div class="max-w-7xl px-4 py-4 mx-auto lg:py-0">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
            @foreach ($books as $index => $book)
                <div class="flex flex-col items-center mb-8 justify-center" data-aos="fade-left"
                    data-aos-delay="{{ $index * 100 }}">
                    <a href="{{ route('book-detail', ['id' => $book->id]) }}">
                        <img src="{{ url('storage', $book->cover) }}" alt="{{ $book->title }}"
                            class="object-cover max-w-full max-h-60 rounded-lg border-4 border-amber-400">
                    </a>
                    <span class="text-gray-100 mt-2">{{ $book->title }}</span>
                    <span class="text-gray-300">{{ $book->author->name }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

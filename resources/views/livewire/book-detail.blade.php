<div class="w-full max-w-[85rem] py-40 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="bg-gray-950 p-8 rounded-lg shadow-lg">
        <div class="flex flex-col items-center lg:items-start">
            <div class="text-gray-200 text-center lg:text-left mb-8 lg:mb-0">
                <h1 class="text-4xl font-bold mb-2">{{ $book->title }}</h1>
                <div class="flex">
                    <h2 class="text-2xl mb-4">by {{ $book->author->name }}</h2>
                    <h1 class="text-3xl font-bold mb-3 ml-44">Sinopsi</h1>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row items-center lg:items-start">
                <img src="{{ url('storage', $book->cover) }}" alt="{{ $book->title }}" class="object-cover h-96 w-72 rounded-lg border-4 border-amber-400 mb-8 lg:mb-0 lg:mr-8">
                <div class="text-gray-200 lg:ml-8 max-h-96 overflow-auto pr-4">

                    <p class="text-gray-300 leading-relaxed mb-4">{!! Str::markdown($book->description) !!}</p>
                </div>
            </div>
            <button wire:click="borrowBook({{ $book->id }})" class="bg-amber-400 text-gray-900 px-6 py-2 rounded-lg font-semibold hover:bg-amber-500 transition duration-300 ml-80 mt-6">
                Pinjam
            </button>

        </div>
    </div>
</div>

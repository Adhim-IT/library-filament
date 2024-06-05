<div class="mb-20 bg-gray-950">
    <div class="w-full bg-gradient-to-r from-gray-950 to-gray-950 py-10 px-4 sm:px-6 lg:px-8 mx-auto ">
        <img class="mx-auto mt-20" src="{{ asset('img/banner.svg') }}" alt="">
    </div>

    {{-- About --}}
    <div class="w-full max-w-[83rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto" data-aos="fade-up">
        <div class="max-w-3xl mx-auto px-4 py-6 lg:py-8 border-b border-gray-200 pb-6 bg-gray-950 rounded-lg shadow-lg text-center"
            data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-3xl font-bold text-gray-200 mb-4">About Us</h2>
            <p class="text-gray-300 leading-relaxed">
                Di sini, kami percaya bahwa setiap cerita memiliki kekuatan untuk mengubah dunia. Itulah mengapa kami
                berusaha keras untuk menyediakan akses yang mudah dan menyenangkan ke berbagai kisah inspiratif dan
                pengetahuan bermanfaat
            </p>
        </div>
    </div>
    {{-- book --}}
    <div class="w-full max-w-[83rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto" data-aos="fade-up">
        <h4 class="flex items-center w-full p-10 text-3xl font-Poppins text-gray-200">
            <span class="font-bold mr-4">Populer</span>
            <a href="#" class="text-amber-400 text-lg font-Poppins font-bold">View all</a>
        </h4>
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-0 border-b border-gray-200">
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
    {{-- author --}}
    <div class="w-full max-w-[83rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto" data-aos="fade-up">
        <h4 class="flex items-center w-full p-10 text-3xl font-Poppins text-gray-200">
            <span class="font-bold mr-4">Top authors</span>
            <a href="#" class="text-amber-400 text-lg font-Poppins font-bold">View all</a>
        </h4>
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-0 border-b border-gray-200 pb-6">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
                @foreach ($authors as $author)
                    <div class="flex flex-col items-center justify-center mb-8" data-aos="fade-left">
                        <img src="{{ url('storage', $author->photo) }}" alt="{{ $author->name }}"
                            class="object-cover h-36 w-36 rounded-full border-4 border-amber-400">
                        <span class="text-gray-100 mt-2 mb-4">{{ $author->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

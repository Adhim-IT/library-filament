<div>
    <header class="bg-neutral-800 h-20 fixed top-0 w-full z-10 ">
        <nav class="flex justify-between items-center w-[92%] mx-auto pt-5">
            <div>
                <img style="width: 10rem" class="w-16 cursor-pointer" src="{{ asset('img/logo-libtel.png') }}"
                    alt="Logo Libtel">
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-neutral-800 md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a wire:navigate class="font-medium {{ request()->is('/') ? 'text-amber-500' : 'text-gray-300'}} py-3 md:py-6 dark:text-amber-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/" aria-current="page">Home
                        </a>
                    </li>
                    <li>
                        <a class="font-medium {{ request()->is('books') ? 'text-amber-500' : 'text-gray-300'}} py-3 md:py-6 dark:text-gray-200 dark:focus:outline-none dark:hover:text-amber-500 dark:focus:ring-1 dark:focus:ring-gray-300 text-gray-300"
                            href="/books">Book
                        </a>
                    </li>
                    <li>
                        <a wire:navigate class="font-medium {{ request()->is('borrowshistori') ? 'text-amber-500' : 'text-gray-300'}} py-3  hover:text-gray-300 md:py-6 dark:text-gray-300 dark:hover:text-amber-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/borrowsghistori">
                            borrows History
                        </a>
                    </li>
                    <li>
                        <a wire:navigate class="font-medium {{ request()->is('returnbook') ? 'text-amber-500' : 'text-gray-300'}} py-3  hover:text-gray-300 md:py-6 dark:text-gray-300 dark:hover:text-amber-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/returnbook">
                            Return Book
                        </a>
                    </li>
                </ul>
            </div>
            @guest
                <div class="flex items-center gap-6">
                    <a href="/login"
                        class="bg-amber-500 text-gray-200 px-5 py-2 rounded-lg hover:bg-[brown-dark] flex items-center">
                        <svg class="flex-shrink-0 w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Login
                        <ion-icon onclick="onToggleMenu(this)" name="menu"
                            class="text-3xl cursor-pointer md:hidden"></ion-icon>
                    </a>
                </div>
            @endguest
            @auth
                <div
                    class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] md:[--trigger:hover] md:py-4">
                    <button type="button"
                        class="flex items-center w-full text-gray-500 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                        {{ auth()->user()->username }}
                        <svg class="ms-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 md:w-48 hidden z-10 bg-white md:shadow-md rounded-lg p-2 dark:bg-gray-800 md:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full md:border before:-top-5 before:start-0 before:w-full before:h-5">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-amber-400 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            wire:navigate href="/my-">
                            My Book
                        </a>

                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-amber-400 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="#">
                            My Account
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-amber-400 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href="/logout">
                            Logout
                        </a>
                    </div>
                </div>
            @endauth
    </header>



    <script></script>
</div>

<div class="min-h-screen py-40">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row w/12 lg:w-8/12 bg-black rounded-xl mx-auto shadow-lg overflow-hidden">
        <div class="w-full lg:w-1/2 py-16 px-12">
            <img src="{{ asset('img/logo-libtel.png') }}" alt="" class="mb-5 w-48">
          <h2  class="text-2xl  text-gray-200 font-bold">Welcome back!</h2>
          <p class="mb-4 pb-4 text-xs text-gray-200">
            Enter to get unlimited access to data & information
          </p>
          <form wire:submit.prevent='save'>
            @if (session('error'))
                <div class="mt-2 bg-red-500 text-sm text-white rounded-lg p-4 mb-4" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="mt-5 relative">
                <label class="text-gray-200 pb-10" for="username">Username</label>
                <input type="text" id="username" wire:model="username" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-800 dark:text-gray-400 dark:focus:ring-neutral-800" aria-describedby="username-error">
                @error('username')
                <div class="absolute bottom-0 right-0 mb-2 flex items-center pointer-events-none pe-3 text-red-500">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-18-18m18 0L3 21"/>
                    </svg>
                    <span class="text-xs ml-1">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="mt-5 relative">
                <label class="text-gray-200 pb-10" for="password">Password</label>
                <input type="password" id="password" wire:model="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-amber-500 focus:ring-amber-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-800 dark:text-gray-400 dark:focus:ring-neutral-800" aria-describedby="password-error">
                @error('password')
                <div class="absolute bottom-0 right-0 mb-2 flex items-center pointer-events-none pe-3 text-red-500">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-18-18m18 0L3 21"/>
                    </svg>
                    <span class="text-xs ml-1">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="mt-10">
              <button type="submit" class="w-full bg-amber-400 py-3 text-center text-black font-sans font-bold rounded-lg">Login</button>
              <p class="text-sm text-gray-200 text-center pt-10">Don't have an account yet? <a href="/register" class="text-amber-400">Register here</a></p>
            </div>
          </form>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('img/logreg.png') }}');">
        </div>
      </div>
    </div>
</div>

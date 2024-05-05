<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <title>{{ $title ?? 'Library' }}</title>
</head>

<body class="font-[Poppins] bg-gradient-to-t from-blue-200 to-cyan-200 h-screen">
    @livewire('partials.navbar')
    <main>
        {{ $slot }}
    </main>
    {{-- @livewire('partials.footer') --}}
    {{-- @livewireScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts /> --}}
        @livewire('partials.footer')
       @livewireScripts
</body>

</html>

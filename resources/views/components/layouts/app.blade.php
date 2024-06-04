<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <title>{{ $title ?? 'Library' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
</head>

<body class="bg-gray-950 h-screen">
    @livewire('partials.navbar')
    <main>
        @include('sweetalert::alert')
        {{ $slot }}
    </main>
    @livewire('partials.footer')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.hook('message.processed', (message, component) => {
                if (message.updateQueue[0].payload.livewire && message.updateQueue[0].payload.livewire
                    .hasOwnProperty('notification')) {
                    let notification = message.updateQueue[0].payload.livewire.notification;
                    Swal.fire({
                        position: 'top-end',
                        icon: notification.type,
                        title: notification.title,
                        text: notification.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });
    </script>
    @livewireScripts

</body>

</html>

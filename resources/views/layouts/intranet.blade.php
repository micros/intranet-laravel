<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $name }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100" x-data="{ isMenuOpen: true, adminOpen: false, profileOpen: false }">
    <div class="md:flex md:flex-col md:min-h-screen">
        <!-- Header -->
        <x-intranet.layout.header />
        <div class="flex flex-col md:flex-row md:flex-1">
            <!-- Contenedor principal -->
            <x-intranet.layout.menu />
            {{ $slot }}
        </div>

        <!-- Footer -->
        <x-intranet.layout.footer />

    </div>
    @livewireScripts
</body>

</html>

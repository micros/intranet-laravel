<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Intranet Micrositios') }} - {{ $name }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100" x-data="{ menuOpen: false }" :class="{ 'overflow-hidden': menuOpen }">
    <div class="md:flex md:flex-col md:min-h-screen">
        <!-- Header -->
        <x-intranet.layouts.header />

        <div class="relative flex flex-col md:flex-row md:flex-1">
            <!-- Contenedor principal -->
            <x-intranet.layouts.menu />
            {{ $slot }}
        </div>

        <!-- Footer -->
        <x-intranet.layouts.footer />

    </div>
    @livewireScripts
</body>

</html>

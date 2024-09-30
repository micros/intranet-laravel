<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>

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

<body class="relative flex flex-col min-h-screen" x-data="{ menuOpen: false }" :class="{ 'overflow-hidden': menuOpen }">
    <!-- Header -->
    <header class="flex items-center justify-between w-full p-4 text-white bg-red-500">
        <div class="flex items-center space-x-2">
            <!-- Botón de menú para mobile -->
            <button @click="menuOpen = !menuOpen" class="p-2 text-red-500 bg-white rounded lg:hidden">
                Menú
            </button>
            <h1 class="text-xl">Header</h1>
        </div>
        <!-- Navegación horizontal adicional, si es necesario -->
        <nav class="hidden space-x-4 lg:flex">
            <a href="#" class="text-white">Link 1</a>
            <a href="#" class="text-white">Link 2</a>
            <a href="#" class="text-white">Link 3</a>
        </nav>
    </header>

    <div class="relative flex flex-1">
        <!-- Navegación lateral -->
        <aside :class="{ 'hidden': !menuOpen, 'block': menuOpen }"
            class="absolute top-0 left-0 w-full h-full p-4 text-white bg-blue-500 lg:block lg:w-64 lg:relative lg:z-10 lg:transform-none lg:h-auto"
            x-cloak>
            <nav>
                <ul class="space-y-2">
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <li><a href="#" class="block">Dashboard</a></li>
                    <li><a href="#" class="block">Settings</a></li>
                    <li><a href="#" class="block">Profile</a></li>
                    <!-- Resto del menú -->
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="flex-1 p-6 bg-gray-100 lg:ml-0 lg:z-0">
            <h2 class="text-2xl font-bold">Contenido Principal</h2>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
            <p>Aquí va el contenido de la página que puede ocupar varias páginas.</p>
        </main>
    </div>

    <!-- Footer -->
    <footer class="w-full p-4 text-center text-white bg-green-500">
        Footer
    </footer>
    @livewireScripts
</body>

</html>

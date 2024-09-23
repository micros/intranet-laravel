<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Básico con Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased bg-gray-100" x-data="{ isMenuOpen: true }">
    <div class="md:flex md:flex-col md:min-h-screen">
        <!-- Header -->
        <header class="flex items-center p-3 text-white bg-gray-800 md:flex-none">
            <button @click="isMenuOpen = !isMenuOpen" class="p-2 mr-3 bg-gray-700 hover:bg-gray-600 focus:outline-none">
                <!-- Ícono del menú (tres líneas) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 class="text-xl font-semibold">Mi Aplicación</h1>
        </header>

        <!-- Contenedor principal -->
        <div class="flex flex-col md:flex-row md:flex-1">
            <!-- Navegación lateral -->
            <nav x-show="isMenuOpen" class="inset-0 z-50 text-white bg-gray-700 md:relative md:w-64 md:h-auto"
                x-transition.opacity>
                <ul>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Inicio</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Acerca de</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Servicios</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Contacto</a></li>
                </ul>
            </nav>

            <!-- Contenido principal -->
            <main class="flex-1 p-4 bg-white">
                <h2 class="mb-3 text-lg font-semibold">Contenido Principal</h2>
                <p>Aquí va el contenido de la página...</p>
            </main>
        </div>

        <!-- Footer -->
        <footer class="p-3 text-center text-white bg-gray-800 md:flex-none">
            <p>© 2024 Mi Aplicación. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>

</html>

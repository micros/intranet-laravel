<!-- Navegación lateral -->
<nav x-show="isMenuOpen" class="inset-0 z-40 text-white bg-gray-700 md:relative md:w-64 md:h-auto" x-transition.opacity>
    <!-- Nombre de la aplicación -->
    <h1 class="px-4 py-2 text-xl font-semibold text-orange-300">{{ config('app.name', 'Intranet Micrositios') }}</h1>
    <ul>
        <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Inicio</a></li>
        <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Acerca de</a></li>
        <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Servicios</a></li>
        <li><a href="#" class="block px-4 py-2 hover:bg-gray-600">Contacto</a></li>
    </ul>
</nav>

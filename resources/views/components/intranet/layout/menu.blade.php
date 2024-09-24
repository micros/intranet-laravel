<!-- Navegación lateral -->
<nav x-show="isMenuOpen"
    class="inset-0 z-40 flex flex-col justify-between text-white bg-gray-700 md:relative md:w-64 md:h-auto"
    x-transition.opacity.duration.500ms>
    <!-- Nombre de la aplicación -->
    <h1 class="px-4 py-2 text-xl font-semibold text-orange-300">{{ config('app.name', 'Intranet Micrositios') }}</h1>

    <ul class="mb-auto">
        <li><a href="/" class="block px-4 py-2 md:pl-8 hover:bg-gray-600">Inicio</a></li>
        <li><a href="/AboutUs" class="block px-4 py-2 md:pl-8 hover:bg-gray-600">Acerca de</a></li>
        <li><a href="/Services" class="block px-4 py-2 md:pl-8 hover:bg-gray-600">Servicios</a></li>
        <li><a href="/Contact" class="block px-4 py-2 md:pl-8 hover:bg-gray-600">Contacto</a></li>
    </ul>

    <!-- Contenedor para el botón de logout centrado -->
    <div class="flex justify-center py-4">
        <livewire:intranet.logout-button />
    </div>
</nav>

<!-- Navegación lateral -->
<nav x-show="isMenuOpen"
    class="inset-0 z-40 flex flex-col justify-between text-white bg-slate-500 md:relative md:w-64 md:h-auto"
    -translate-x-full>
    <!-- Nombre de la aplicación -->
    <h1 class="px-4 py-2 text-xl font-semibold text-orange-200 bg-slate-600">
        {{ config('app.name', 'Intranet Micrositios') }}</h1>

    <ul class="mb-auto">
        <x-intranet.items.menu-item name='Inicio' url='/' />
        <x-intranet.items.menu-item name='Acerca de' url='/AboutUs' />
        <x-intranet.items.menu-item name='Servicios' url='/Services' />
        <x-intranet.items.menu-item name='Contacto' url='/Contact' />
    </ul>

    <!-- Contenedor para el botón de logout centrado -->
    <div class="justify-center hidden py-4 md:flex">
        <livewire:intranet.logout-button message="Cerrar Sesión" />
    </div>
</nav>

<!-- Navegación lateral -->
<aside :class="{ 'hidden': !menuOpen, 'block': menuOpen }"
    class="absolute top-0 left-0 w-full h-full text-white bg-slate-500 md:block md:w-64 md:relative md:z-10 md:transform-none md:h-auto">

    {{-- <nav class="inset-0 z-40 flex flex-col justify-between text-white bg-slate-500 md:relative md:w-64 md:h-auto" --}}
    <nav>
        <!-- Nombre de la aplicación -->
        <h1 class="px-4 py-2 text-xl font-semibold text-orange-200 bg-slate-600">
            {{ config('app.name', 'Intranet Micrositios') }}</h1>

        <ul class="mb-auto">
            <x-intranet.items.menu-item name='Dashboard' url='/' />
            <x-intranet.items.menu-item name='Acerca de' url='/AboutUs' />
            <x-intranet.items.menu-item name='Servicios' url='/Services' />
            <x-intranet.items.menu-item name='Contacto' url='/Contact' />
        </ul>
    </nav>
</aside>

<div
    class="flex flex-col items-start justify-between p-3 text-white bg-gray-800 md:flex-row md:items-center md:flex-none">
    <div class="flex items-center flex-grow md:flex-grow-0">
        <button @click="isMenuOpen = !isMenuOpen" class="p-2 mr-3 bg-gray-700 hover:bg-gray-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <!-- Nombre de la aplicación -->
        <h1 class="text-xl font-semibold">{{ config('app.name', 'Intranet Micrositios') }}</h1>
    </div>

    <!-- Buscador -->
    <div class="flex items-center w-full mt-3 bg-transparent md:w-auto md:mt-0 md:ml-10 md:flex-grow">
        <input type="text" placeholder="Buscar..."
            class="w-full px-3 py-2 text-gray-900 bg-gray-200 border-none md:w-64 focus:outline-none">
        <button class="px-3 py-2 bg-gray-600 hover:bg-gray-500 focus:outline-none">
            <i class="text-white fas fa-search"></i>
        </button>
    </div>

    <div class="flex items-center mt-3 space-x-4 md:mt-0">
        <x-intranet.layout.administration />
        <x-intranet.layout.profile />
    </div>
</div>

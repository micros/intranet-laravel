<div
    class="flex flex-col items-start justify-between p-3 text-white bg-gray-800 md:flex-row md:items-center md:flex-none">
    <div class="flex items-center mt-3 space-x-3 md:mt-0">
        <x-intranet.layout.toggle-menu />
        <x-intranet.layout.administration />
        <x-intranet.layout.profile />
        <x-intranet.layout.notification />
    </div>

    <!-- Buscador -->
    <div class="flex items-center w-full mt-3 md:w-auto md:mt-0 md:ml-3 md:flex-grow">
        <input type="text" placeholder="Buscar..."
            class="w-full px-3 py-2 text-gray-900 bg-gray-200 border-none md:w-64 focus:outline-double">
        <button class="px-3 py-2 bg-gray-600 hover:bg-gray-500 focus:outline-none">
            <i class="text-white fas fa-search"></i>
        </button>
    </div>

</div>

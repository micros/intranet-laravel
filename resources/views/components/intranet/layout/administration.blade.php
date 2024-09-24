<div class="relative" x-data="{ adminOpen: false }">
    <button @click="adminOpen = !adminOpen"
        class="flex items-center justify-center text-white bg-gray-700 rounded w-9 h-9 hover:bg-gray-600 focus:outline-none">
        <i class="fas fa-cogs"></i>
    </button>
    <div x-show="adminOpen" @click.away="adminOpen = false"
        class="absolute left-0 z-50 w-48 mt-2 bg-white rounded shadow-lg" x-transition.origin.top.right>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Gestión de Usuarios</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Configuraciones</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Reportes</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logs del Sistema</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Backups</a>
    </div>
</div>

<div class="relative" x-data="{ profileOpen: false }">
    <button @click="profileOpen = !profileOpen"
        class="flex items-center px-3 py-3 text-white bg-gray-700 hover:bg-gray-600 focus:outline-none">
        <i class="fas fa-user"></i>
    </button>
    <div x-show="profileOpen" @click.away="profileOpen = false"
        class="absolute right-0 z-50 w-48 mt-2 bg-white rounded shadow-lg" x-transition.origin.top.right>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Ver Perfil</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Cerrar Sesión</a>
    </div>
</div>

<div class="relative" x-data="{ profileOpen: false }">
    <button @click="profileOpen = !profileOpen"
        class="flex items-center justify-center rounded-full text-slate-300 w-9 h-9 hover:bg-slate-500 focus:outline-none">
        <i class="fas fa-user"></i>
    </button>
    <div x-show="profileOpen" @click.away="profileOpen = false"
        class="absolute left-0 z-50 w-48 mt-2 bg-white rounded shadow-lg" x-transition.origin.top.right x-cloak>
        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Ver Perfil</a>

        <!-- Enlace de Cerrar Sesión -->
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar Sesión
        </a>

        <!-- Formulario oculto para logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </div>
</div>

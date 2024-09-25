<div class="relative" x-data="{ notificationOpen: false, hasNotifications: true }">
    <button @click="notificationOpen = !notificationOpen" :disabled="!hasNotifications"
        class="relative flex items-center justify-center rounded-full text-slate-300 w-9 h-9 hover:bg-slate-500 focus:outline-none disabled:opacity-50">
        <i class="fas fa-bell"></i>

        <!-- Punto rojo si hay notificaciones -->
        <span x-show="hasNotifications"
            class="absolute block w-3 h-3 bg-red-600 rounded-full animate-ping -top-0.5 -right-0.5"></span>
        <span x-show="hasNotifications" class="absolute block w-3 h-3 bg-red-600 rounded-full -top-0.5 -right-0.5"></span>
    </button>

    <!-- Dropdown de notificaciones centrado -->
    <div x-show="notificationOpen && hasNotifications" @click.away="notificationOpen = false"
        class="absolute z-50 w-48 mt-2 transform -translate-x-1/2 bg-white rounded shadow-lg left-1/2"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-cloak>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 1</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 2</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 3</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 4</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 5</a>
    </div>
</div>

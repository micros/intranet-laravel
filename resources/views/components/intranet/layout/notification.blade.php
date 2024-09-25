<div class="relative" x-data="{ notificationOpen: false, hasNotifications: true }">
    <button @click="notificationOpen = !notificationOpen" :disabled="!hasNotifications"
        class="relative flex items-center justify-center text-white bg-gray-700 rounded w-9 h-9 hover:bg-gray-600 focus:outline-none disabled:opacity-50">
        <i class="fas fa-bell"></i>

        <!-- Punto rojo si hay notificaciones -->
        <span x-show="hasNotifications"
            class="absolute block w-3 h-3 bg-red-600 rounded-full animate-ping -top-1 -right-1"></span>
        <span x-show="hasNotifications" class="absolute block w-3 h-3 bg-red-600 rounded-full -top-1 -right-1"></span>
    </button>

    <!-- Dropdown de notificaciones -->
    <div x-show="notificationOpen && hasNotifications" @click.away="notificationOpen = false"
        class="absolute right-0 z-50 w-48 mt-2 bg-white rounded shadow-lg" x-transition.origin.top.right x-cloak>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 1</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 2</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 3</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 4</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Notificación 5</a>
    </div>
</div>

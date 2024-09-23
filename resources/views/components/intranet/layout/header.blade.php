<div class="flex items-center justify-between p-3 text-white bg-gray-800 md:flex-none">
    <div class="flex items-center">
        <button @click="isMenuOpen = !isMenuOpen" class="p-2 mr-3 bg-gray-700 hover:bg-gray-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <h1 class="text-xl font-semibold">Mi Aplicación</h1>
    </div>
    <div class="flex items-center space-x-4">
        <x-intranet.layout.administration />
        <x-intranet.layout.profile />
    </div>
</div>

<div class="flex items-center flex-grow md:flex-grow-0">
    <button @click="menuOpen = !menuOpen"
        class="flex items-center justify-center rounded-full text-slate-300 w-9 h-9 hover:bg-slate-500 focus:outline-none md:hidden">
        <i :class="menuOpen ? 'fa-solid fa-xmark' : 'fas fa-bars'"></i>
    </button>
</div>

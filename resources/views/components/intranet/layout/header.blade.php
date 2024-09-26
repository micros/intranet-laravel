<div
    class="flex flex-col items-start justify-between p-3 text-white bg-slate-700 md:flex-row md:items-center md:flex-none">
    <div class="flex items-center mt-3 space-x-1 md:mr-8 md:mt-0">
        <x-intranet.layout.toggle-menu />
        <x-intranet.layout.administration />
        <x-intranet.layout.profile />
        <x-intranet.layout.notification />
        <div class="flex justify-center py-4 pl-14 md:hidden">
            <livewire:intranet.logout-button message="" />
        </div>

    </div>

    <!-- Buscador -->
    <div class="flex items-center w-full mt-3 md:w-auto md:mt-0 md:ml-3 md:flex-grow">
        <x-intranet.layout.searchbar />
    </div>

</div>

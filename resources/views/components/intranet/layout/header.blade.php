<div
    class="flex flex-col items-start justify-between p-3 text-white bg-slate-700 md:flex-row md:items-center md:flex-none">
    <div class="flex items-center mt-0 space-x-1 md:mr-8">
        <x-intranet.layout.toggle-menu />
        <x-intranet.layout.profile />
        <x-intranet.layout.notification />
        <x-intranet.layout.administration />
        <livewire:intranet.logout-button message="" />
        <x-intranet.layout.searchbar />
    </div>

    <!-- Buscador -->
    {{-- <div class="flex items-center w-full md:w-auto md:mt-0 md:ml-3 md:flex-grow">
    </div> --}}

</div>

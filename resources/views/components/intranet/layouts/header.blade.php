<div
    class="flex flex-col items-start justify-between p-3 text-white bg-slate-700 md:flex-row md:items-center md:flex-none">
    <div class="flex items-center mt-0 space-x-1 md:mr-8">
        <x-intranet.layouts.toggle-menu />
        <x-intranet.layouts.profile />
        <x-intranet.layouts.notification />
        <x-intranet.layouts.administration />
        <livewire:intranet.logout-button message="" />
        <x-intranet.layouts.searchbar />
    </div>

    <!-- Buscador -->
    {{-- <div class="flex items-center w-full md:w-auto md:mt-0 md:ml-3 md:flex-grow">
    </div> --}}

</div>

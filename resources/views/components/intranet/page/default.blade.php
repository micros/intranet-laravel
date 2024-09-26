<x-intranet.layout.main>
    {{-- Layout necesita name --}}
    <x-slot:name>
        {{ $name }}
    </x-slot>
    {{-- Main necesita sidebar --}}
    @if (isset($sidebar) && !$sidebar->isEmpty())
        <x-slot:sidebar>
            {{ $sidebar }}
        </x-slot>
    @endif
    {{-- Main necesita content --}}
    <x-slot:content>
        <div class="h-full p-6 font-sans text-gray-800 bg-white lg:flex-1 lg:px-14">
            <x-intranet.layout.breadcrumbs />
            <!-- Título prominente -->
            <x-intranet.items.title :$name />

            <!-- Subtítulo -->
            <x-intranet.items.subtitle :$subtitle />

            <!-- Resumen -->
            <x-intranet.items.summary :$summary />

            <!-- Descripción -->
            <x-intranet.items.description :$description />
            <!-- Información del autor y fecha de creación -->
            <div class="flex flex-col justify-between pt-4 text-sm text-gray-500 border-t border-gray-300 md:flex-row">
                <x-intranet.items.date :$date />
                <x-intranet.items.author :$author />
            </div>
        </div>
    </x-slot>
</x-intranet.layout.main>

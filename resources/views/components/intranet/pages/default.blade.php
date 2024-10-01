<x-intranet-layout>
    <x-slot:name>
        {{ $name }}
    </x-slot>

    {{-- Main necesita sidebar --}}
    @if (isset($destacados) && count($destacados))
        <x-slot:sidebar>
            <x-intranet.layouts.sidebar :$destacados />
        </x-slot:sidebar>
    @endif
    {{-- Main necesita content --}}
    <x-slot:content>
        <div class="h-full p-6 font-sans text-gray-800 bg-white lg:flex-1 lg:px-14">
            <x-intranet.layouts.breadcrumbs />
            <!-- Título prominente -->
            <x-intranet.items.title :$name class="mb-2 text-4xl" />

            <!-- Subtítulo -->
            <x-intranet.items.subtitle :$subtitle class="mb-4 text-2xl" />

            <!-- Información del autor y fecha de creación -->
            <div>
                <x-intranet.items.date :$date class="text-sm" />
            </div>
            <div class="mb-4">
                <x-intranet.items.author :$author class="text-sm" />
            </div>

            <!-- Imagen -->
            <x-intranet.items.image w="600" h="400" alt="Texto alternativo de la imagen" class="w-full md:w-3/4" />

            <!-- Resumen -->
            <x-intranet.items.summary :$summary class="mt-8 mb-6 text-lg" />

            <!-- Descripción -->
            <x-intranet.items.description :$description />
            <!-- Subcategorías -->
            <x-intranet.lists.default :$children class="mt-8 md:ml-2" />
        </div>
    </x-slot>
</x-intranet-layout>

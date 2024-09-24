<x-intranet.layout.main>
    {{-- Layout necesita name --}}
    <x-slot name="name">
        {{ $name }}
    </x-slot>
    {{-- Main necesita sidebar --}}
    @if (isset($sidebar) && !$sidebar->isEmpty())
        <x-slot name="sidebar">
            {{ $sidebar }}
        </x-slot>
    @endif
    {{-- Main necesita content --}}
    <x-slot name="content">
        <div class="h-full p-6 font-serif text-gray-800 bg-white lg:flex-1 lg:px-14">
            <x-intranet.layout.breadcrumbs />
            <!-- Título prominente -->
            <h1 class="mb-2 text-4xl font-bold text-gray-900">{{ $name ?? 'This page has no title' }}</h1>

            <!-- Subtítulo -->
            <h2 class="mb-4 font-sans text-2xl font-medium text-gray-700">
                {{ $subtitle ?? 'This page has no subtitle' }}
            </h2>

            <!-- Resumen -->
            <p class="mb-6 text-lg text-gray-600">{{ $summary ?? 'This page has no summary' }}</p>

            <!-- Descripción -->
            <div class="max-w-full mb-8 prose">
                {{ $description ?? 'This page has no description' }}
            </div>
            <!-- Información del autor y fecha de creación -->
            <div
                class="flex flex-col justify-between pt-4 font-sans text-sm text-gray-500 border-t border-gray-300 md:flex-row">
                <span>Última actualización: {{ $date ?? 'This page has no date' }}</span>
                <span>Autor: {{ $author ?? 'This page has no author' }}</span>
            </div>
        </div>
    </x-slot>
</x-intranet.layout.main>

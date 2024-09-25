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
            <!-- Título prominente -->
            <h1 class="mb-2 font-serif text-4xl font-bold text-gray-900">{{ $name ?? 'This page has no title' }}</h1>
            {{ $content }}
        </div>
    </x-slot>
</x-intranet.layout.main>

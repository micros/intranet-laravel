<x-intranet-layout>
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
            <x-intranet.items.title :$name class="mb-2 text-4xl" />
            {{ $content }}
        </div>
    </x-slot>
</x-intranet-layout>

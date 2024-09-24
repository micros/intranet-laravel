<x-intranet-layout>
    <x-slot:name>
        {{ $name }}
    </x-slot>

    <!-- Contenido principal -->
    <main class="flex-1">
        <div class="h-full lg:flex">
            <!-- Contenido principal -->
            {{ $content }}
            <!-- Barra lateral de destacados -->
            @if (isset($sidebar) && !$sidebar->isEmpty())
                <x-intranet.layout.sidebar>
                    {{ $sidebar }}
                </x-intranet.layout.sidebar>
            @endif
        </div>
    </main>
</x-intranet-layout>

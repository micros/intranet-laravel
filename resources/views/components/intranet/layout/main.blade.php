<x-intranet-layout>
    <x-slot name="name">
        {{ $name }}
    </x-slot>

    <!-- Contenido principal -->
    <main class="flex-1">
        <div class="h-full lg:flex">
            <!-- Contenido principal -->
            {{ $content }}
            <!-- Barra lateral de destacados -->
            <x-intranet.layout.sidebar>
                {{ $sidebar }}
            </x-intranet.layout.sidebar>
        </div>
    </main>
</x-intranet-layout>

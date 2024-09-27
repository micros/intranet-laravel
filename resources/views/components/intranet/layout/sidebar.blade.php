<div class="hidden h-full p-4 lg:block lg:w-64 bg-slate-200">
    <h2 class="mb-3 text-lg font-semibold">Destacados</h2>
    {{ $destacados[0] }}
    @foreach ($destacados as $item)
        <div>{{ $item }}
        </div>
    @endforeach
</div>

<div {{ $attributes->except(['children'])->merge(['class' => '']) }}>

    <x-intranet.items.subtitle subtitle="Subpáginas" class="mb-6 text-2xl" />

    <ul>
        @foreach ($children as $key => $item)
            <x-intranet.lists.default-item :item="$item" class="mb-6" />
        @endforeach
    </ul>
</div>

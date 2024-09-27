<li {{ $attributes->merge(['class' => '']) }}>
    <a href="{{ $url }}"
        class="flex flex-col p-3 bg-white rounded-sm shadow items-left hover:bg-gray-100 md:flex-row">
        <x-intranet.items.image w="150" h="100" alt="Texto alternativo de la imagen" class="w-full md:w-32" />
        <div class="flex-grow">
            <x-intranet.items.title :$name class="text-xl" />
            <x-intranet.items.subtitle :$subtitle class="text-base" />
            <x-intranet.items.summary :$summary class="text-sm" />
            <x-intranet.items.date :$date class="text-xs" />
        </div>
    </a>
</li>

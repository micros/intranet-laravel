<li {{ $attributes->merge(['class' => '']) }}>
    <a href="{{ $url }}"
        class="flex flex-col items-center p-3 bg-white rounded-sm shadow hover:bg-gray-100 md:flex-row">
        <img src="https://via.placeholder.com/150x100?text=Imagen+1" alt="Imagen del artículo"
            class="object-cover w-full h-24 mb-4 rounded-sm md:w-32 md:mr-4 md:mb-0">
        <div class="flex-grow">
            <x-intranet.items.title :$name class="text-xl text-blue-600" />
            <x-intranet.items.subtitle :$subtitle class="text-base" />
            <x-intranet.items.summary :$summary class="text-sm" />
            <x-intranet.items.date :$date class="text-xs" />
        </div>
    </a>
</li>

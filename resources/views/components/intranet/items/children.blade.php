<div {{ $attributes->merge(['class' => '']) }}>

    <x-intranet.items.subtitle subtitle="Subpáginas" class="mb-6 text-2xl" />

    <ul>
        <x-intranet.items.children-item name='Inicio' subtitle='Este es el subtítulo' summary='Este es el resumen'
            url='/' date='08/13/2024' class="mb-6" />
        <x-intranet.items.children-item name='Acerca de' subtitle='Este es el subtítulo' summary='Este es el resumen'
            url='/AboutUs' date='08/13/2024' class="mb-6" />
        <x-intranet.items.children-item name='Servicios' subtitle='Este es el subtítulo' summary='Este es el resumen'
            url='/Services' date='08/13/2024' class="mb-6" />
        <x-intranet.items.children-item name='Contacto' subtitle='Este es el subtítulo' summary='Este es el resumen'
            url='/Contact' date='08/13/2024' class="mb-6" />
    </ul>
</div>

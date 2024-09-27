<span {{ $attributes->merge(['class' => 'text-gray-700']) }}>Última actualización:
    {{ \Carbon\Carbon::parse($date)->locale('es')->isoFormat('D [de] MMMM [de] YYYY') }}</span>

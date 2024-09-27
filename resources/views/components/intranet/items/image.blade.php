<img src="https://picsum.photos/id/{{ random_int(1, 200) }}/{{ $w }}/{{ $h }}"
    alt="{{ $alt }}" {{ $attributes->merge(['class' => 'object-cover mb-4 rounded-sm md:mr-4 md:mb-0']) }}>

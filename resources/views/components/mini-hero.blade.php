@props(['filename', 'alt', 'reverse' => 'false'])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center lg:flex-row']) }}>
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}" class="w-150px h-150px md:w-350px md:h-350px">
    {{ $slot }}
</div>
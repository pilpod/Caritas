@props(['href', 'txt', 'container'])

<a href="{{ $href ?? 'https://www.santjosepbadalona.cat/' }}" target="_blank" class="place-self-center {{ $container ?? '' }}">
    <img src="{{ asset('storage/logo/' . $profile->logo) }}" alt="Logo" {{ $attributes }} />
</a>
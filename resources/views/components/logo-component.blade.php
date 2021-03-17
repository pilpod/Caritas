@props(['href', 'txt', 'container'])

<a href="{{ $href ?? $href }}" target="_blank" class="place-self-center {{ $container ?? '' }}">
    <img src="{{ asset('storage/logo/' . $profile->logo) }}" alt="Logo" {{ $attributes }} />
</a>
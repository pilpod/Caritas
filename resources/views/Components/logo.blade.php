@props(['href', 'txt', 'container'])

    <a href="{{ $href ?? $href }}" target="_blank" class="place-self-center {{ $container ?? '' }}">
      <img src="{{ asset('storage/img/logoSantJosep.jpeg') }}" alt="Logo" {{ $attributes }} />
    </a>

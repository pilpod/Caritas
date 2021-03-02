@props(['href'])

<a href="{{ $href ?? $href }}" target="_blank" rel="external ">
  <img src="{{ asset('storage/img/logo.png') }}" alt="Caritas Logo"/>
</a>
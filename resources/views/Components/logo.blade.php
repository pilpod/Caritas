@props(['href'])

<a href="{{ $href ?? $href }}" target="_blank">
  <img src="{{ asset('storage/img/logo.png') }}" alt="Caritas Logo"/>
</a>
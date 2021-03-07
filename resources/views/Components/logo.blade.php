@props(['href'])

<div class="flex items-center w-24 h-24 rounded-md relative left-8">
  <a href="{{ $href ?? $href }}" target="_blank">
    <img src="{{ asset('storage/img/logoSantJosep.png') }}" alt="Caritas Logo"/>
  </a>
</div> 
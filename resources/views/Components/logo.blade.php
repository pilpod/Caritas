@props(['href'])

<div class="flex items-center w-24 h-24 rounded-md">
  <a href="{{ $href ?? $href }}" target="_blank">
    <img src="{{ asset('img/logo/'. $profile->logo) }}" alt="Caritas Logo"/>
  </a>
</div> 

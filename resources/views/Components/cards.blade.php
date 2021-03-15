@props(['titleCard'])

<div class="flex justify-center w-11/12">
  <ul>
    <p class="font-bold">{{ $titleCard }}</p>
    {{ $slot }}
  </ul>
</div>
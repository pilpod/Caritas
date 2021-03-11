@props(['title'])

<div class="flex flex-col items-center">
  <p class="text-white rounded-t-dtl w-full bg-gradient-to-b from-red-gd to-red-gd2 text-center font-bold text-ui-main uppercase mb-3 py-4">{{ $title }}</p>
  <ul class="font-bold">
    {{ $slot }}
  </ul>
</div>
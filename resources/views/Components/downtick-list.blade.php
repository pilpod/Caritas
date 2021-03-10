@props(['title'])

<div class="flex flex-col w-full justify-between items-center my-10">
  <p class="text-white rounded-t-dtl w-10/12 bg-gradient-to-b from-red-gd to-red-gd2 text-center font-bold text-ui-main uppercase mb-3 py-4">{{ $title }}</p>
  <ul class="w-10/12 text-body font-bold">
    {{ $slot }}
  </ul>
</div>
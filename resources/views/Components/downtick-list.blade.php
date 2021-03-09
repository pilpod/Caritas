@props(['title'])

<p class="color-white w-72">{{ $title }}</p>
<ul class="list-outside list-disc">
  {{ $slot }}
</ul>
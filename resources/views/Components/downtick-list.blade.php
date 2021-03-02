@props(['title'])

<ul>
  <p>{{ $title }}</p>
  {{ $slot }}
</ul>
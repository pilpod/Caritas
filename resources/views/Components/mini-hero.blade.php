@props(['presentation' => 'normal', 'filename', 'alt'])

<div class="flex flex-col items-center gap-4">
  @switch($presentation)
    @case('normal')
    {{ $slot }}
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}" class="w-150px h-150px">
      @break
    @case('reverse')
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}" class="w-150px h-150px">
    {{ $slot }}
      @break
  @endswitch
</div>
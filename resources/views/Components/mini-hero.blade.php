@props(['presentation' => 'normal', 'filename', 'alt'])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center']) }}>
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
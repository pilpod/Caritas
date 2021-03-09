@props(['presentation' => 'normal', 'filename', 'alt'])

<div class="flex flex-col justify-center w-full">
  @switch($presentation)
    @case('normal')
    {{ $slot }}
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}" class="w-36 h-36">
      @break
    @case('reverse')
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}" class="w-36 h-36">
    {{ $slot }}
      @break
  @endswitch
</div>
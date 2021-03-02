@props(['presentation' => 'normal', 'filename', 'alt'])

<div>
  @switch($presentation)
    @case('normal')
    {{ $slot }}
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}">
      @break
    @case('reverse')
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $alt }}">
    {{ $slot }}
      @break
  @endswitch
</div>
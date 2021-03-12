@props(['txt' => '', 'filename' => '', 'iAlt' => ''])

<a {{ $attributes->merge(['class' => 'inline-flex gap-2 items-start']) }}>
  @if ($filename)
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $iAlt }}" class="w-5 h-5"/>
  @endif
  {{ $txt }}
</a> 
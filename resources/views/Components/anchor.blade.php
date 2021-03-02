@props(['txt' => '', 'filename' => '', 'iAlt' => ''])

<a {{ $attributes }}>
  @if ($filename)
    <img src="{{ asset('storage/img/' . $filename) }}" alt="{{ $iAlt }}" />
  @endif
  {{ $txt }}
</a>
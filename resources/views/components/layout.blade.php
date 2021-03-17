@props(['title'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
        <title>{{ $title ?? 'Càritas @ Sant Josep Badalona' }}</title>
      </head>
    <body id="body" {{ $attributes }}>
      {{ $slot }}
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
      @stack('script-back-to-top')
    </body>
</html>
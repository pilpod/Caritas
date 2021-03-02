@props(['title'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="/css/app.css">
      <title>{{ $title ?? 'Càritas @ Badalona' }}</title>
  </head>
  <body>
    {{ $slot }}
  </body>
</html>
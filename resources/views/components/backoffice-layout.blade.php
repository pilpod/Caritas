@props(['title'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
        <title>{{ $title ?? 'Càritas @ Sant Josep Badalona' }}</title>

        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
      </head>
    <body id="body" {{ $attributes }}>
      {{ $slot }}
     
    </body>
</html>
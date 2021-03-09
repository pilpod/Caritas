<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
        <title>Caritas Badalona</title>
    </head>
    <body class="antialiased">
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div>
            <a href="{{route('language', 'es')}}">Castellano</a>
            <a href="{{route('language', 'cat')}}">Catalan</a>
            <h2>
                {{__('test')}}
            </h2>
        </div>
    </body>
</html>

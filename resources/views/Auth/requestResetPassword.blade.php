<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <form method="POST" action="{{route('password.email')}}" >
        @csrf
        <label for="email">Correo Electrònic</label>
            <input id="email" type="email" class= "@error('email') is-invalid @enderror" name="email" required autocomplete="email">

            @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
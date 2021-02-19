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
    <form method="POST" action="{{route('register')}}">
    @csrf
        <input type="text" id="name" placeholder="Insert your name" name="name" required>
        <input type="email" id="email" placeholder="Your email" name="email" required>
        <input type="password" id="password" placeholder="Choose a Password" name="password" required>
        <input type="password" id="password-confirm" placeholder="Confirm your Password" name="password-confirm" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
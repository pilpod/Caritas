<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <div class="container sm mx-auto mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-10">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{$request->route('token')}}">
            <div class=" flex flex-col">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class=" border-gray-200 border-2 p-2 rounded mb-5 @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$request->email}}">

                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="flex flex-col">
                <label for="password" class="">Nueva Contraseña</label>
                <input id="password" type="password" class="border-gray-200 border-2 p-2 rounded mb-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nueva Contraseña">
                @error('password')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="">Confirmar Nueva Contraseña</label>
                <input id="password-confirm" type="password" class="border-gray-200 border-2 p-2 rounded mb-20" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Nueva Contraseña">
            </div>
            <input name="update" id="update" class="block btn w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500" type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>
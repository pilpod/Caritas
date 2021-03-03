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
        <form method="POST" action="{{route('password.email')}}" class="flex flex-col">
            @csrf
            <div class="flex flex-col">
                <label class="mb-2" for="email">Per restablir la contrasenya, si us plau introduïu el vostre Correo Electrònic</label>
                <input id="email" type="email" class=" border-gray-200 border-2 p-2 mb-10 rounded @error('email') is-invalid @enderror" name="email" placeholder="email" required autocomplete="email">

                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <button class="btn w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>
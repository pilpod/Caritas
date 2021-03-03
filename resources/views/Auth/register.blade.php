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
        <form method="POST" action="{{ route('register') }}" >
            @csrf
            <div class="flex flex-col">
                <label for="name" class="">Name</label>
                <input id="name" type="text" class=" border-gray-200 border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="email" class="">Email</label>
                <input id="email" type="email" class="border-gray-200 border-2 p-2 rounded mb-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="">Password</label>
                <input id="password" type="password" class="border-gray-200 border-2 p-2 rounded mb-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="">Password Confirm</label>
                <input id="password-confirm" type="password" class="border-gray-200 border-2 p-2 rounded mb-20" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
            </div>
            <input name="register" id="register" class=" block btn w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500" type="submit" value="Register">
        </form>
    </div>
</body>

</html>
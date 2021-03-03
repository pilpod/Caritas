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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class=" flex flex-col mb-5">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror border-gray-200 border-2 p-2 rounded " name="email" required autocomplete="email">

                        @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class=" flex flex-col mb-10">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror border-gray-200 border-2 p-2 rounded" name="password" required>
                        @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <a class="hover:text-red-500" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>

                    <div class="mb-10">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button type="submit" class="block w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500">
                        {{ __('Login') }}
                    </button>

            </form>
    </div>

</body>
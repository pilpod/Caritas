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
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <fieldset >
                <legend>
                    Login
                </legend>
                <label for="email">Email</label>
                <input id="email" type="email" class= "@error('email') is-invalid @enderror" name="email" required autocomplete="email">

                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="password">Password</label>

                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required>
                @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                
                

                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>

                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>

            </fieldset>

        </form>
        
    </div>
    
</body>

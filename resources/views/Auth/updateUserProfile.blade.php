<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Caritas Badalona</title>
</head>

<body>

    @if(session('status') == "profile-information-updated")
        <div>
            <h2>Perfil actualizado con éxito</h2>
        </div>
        <a href="{{ route('dashboard') }}">Volver</a>
    @else

    <form method="POST" action="{{ route('user-profile-information.update') }}">
        @method("PUT")
        @csrf
        <div class="flex flex-col">
            <label for="name" class="">Nombre</label>
            <input id="name" type="text" class=" border-gray-200 border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus placeholder="Nombre">
            @error('name', 'profile-information-updated')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="email" class="">Correo Electrónico</label>
            <input id="email" type="email" class="border-gray-200 border-2 p-2 rounded mb-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? auth()->user()->email}}" required autocomplete="email" placeholder="Correo Electrónico">
            @error('email', 'profile-information-updated')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button name="register" id="register" class=" block btn w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500" type="submit">Actualizar</button>
    </form>
    @endif
</body>

</html>
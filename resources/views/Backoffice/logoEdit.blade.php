<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Caritas Badalona</title>
</head>

<body>
    <header class="border-b-2 border-red-500 mb-20 pt-3 px-3">

        <h1 class="text-3xl mb-5">Caritas Escritorio</h1>
        <ul class="flex">
            <li class="mr-6">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-gray-600 hover:text-red-500" type="submit">Desconectarse</button>
                </form>

            </li>
        </ul>

    </header>
    <div class="container sm mx-auto mt-20 w-1/2 border-red-300 border-2 rounded-2xl p-10 relative">
        <h2 class="mb-10 text-lg text-center">Editar logotipo de la organización</h2>
        <a class="absolute top-10 right-10 text-red-500" href="{{route('dashboard')}}">Atrás</a>
        
        <form method="POST" action="{{ route('logo.update', $profile->id) }}"  enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col">
                <label for="name">Logotipo de la organización</label>
                <input type="file" name="logo" id="logo" class="border-gray-200 border-2 p-2 rounded mb-5 @error('logo') is-invalid @enderror placeholder="Elegir su logotipo">
                @error('logo')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <button class="block btn w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500" type="submit">Cargar</button>
        </form>
    </div>
</body>

</html>
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

        <h1 class="text-3xl mb-5">Caritas Dasboard</h1>
        <ul class="flex">
            <li class="mr-6">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-gray-600 hover:text-red-500" type="submit">Logout</button>
                </form>

            </li>
        </ul>

    </header>
    <main class="container m">

        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20">
            <div class="flex justify-between mb-10">
                <h2 class="text-xl">Datos de Registro</h2>
                <button class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500 flex-end">{{ __('buttons.update') }}</button>

            </div>
            <p class="text-md">{{$user->email}}</p>

        </section>

        @if(!$profile)
        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20 flex justify-between ">
            <h3>Crear perfil de l&#039;organització</h3>
            <a class="block bg-red-500 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500" href="{{route('dashboard.create')}}" type="button">
                {{__('buttons.create')}}
            </a>

        </section>
        @else
        <section class="w-mt-72 w-1/2 border-red-300 border-2 rounded-2xl p-5 mb-20">
            <a class="block bg-red-500 w-1/3 hover:bg-red-300 text-white font-bold p-2 text-md rounded border-b-4 border-red-500" href="{{route('dashboard.edit', $profile->id)}}" type="button">
                {{__('buttons.update')}}
            </a>
            <div>
                <h4 class="ml-1">Direcio:
                    <span>
                        {{$profile->direction}}
                    </span>
                </h4>
                <h4>Poblacio:
                    <span>
                        {{$profile->city}}
                    </span>
                </h4>
                <h4>Telefono:
                    <span>
                        {{$profile->phone}}
                    </span>
                </h4>
                <h4>Cuenta bancaria:
                    <span>
                        {{$profile->bankAccount}}
                    </span>
                </h4>
                <h4> Bizum:
                    <span>
                        {{$profile->bizum}}
                    </span>
                </h4>

            </div>
        </section>
        @endif
    </main>
</body>

</html>
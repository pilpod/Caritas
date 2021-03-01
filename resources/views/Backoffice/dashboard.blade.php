<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Caritas Badalona</title>
</head>

<body>
    <div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            <button type="submit">logout</button>
        </form>

    </div>

    <section>
        <h2>Datos de Registro</h2>
        <span>{{$user->email}}</span>
        <button>{{ __('buttons.update') }}</button>

    </section>

    <section>
        <h3>Crear perfil de l&#039;organització</h3>
        <a href="{{route('dashboard.create')}}" type="button">
        {{__('buttons.create')}}
        </a>

    </section>
</body>

</html>
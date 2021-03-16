<x-layout>
    <header class="border-b-2 border-red mb-20 pt-3 px-3">
    <div>
        <h1 class="text-h2 mb-5">Caritas Escritorio</h1>
        <ul class="flex">
            <li class="mr-6">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-grey hover:text-red text-ui-main" type="submit">Desconectar</button>
                </form>

            </li>
        </ul>
    </div>
    </header>
    <main class="pl-5 flex gap-20 flex-wrap justify-center text-body mr-4">
        <section class="w-1/3 border-red border-2 rounded-2xl p-5 h-64 flex-grow-0">
            <div class="flex justify-between mb-10">
                <h2 class="text-xl">Datos de conexión</h2>
                <a href="{{route('user-profile-information.edit')}}" class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light flex-end">Actualizar</a>
            </div>
            <div>
                <div class="">
                    <h4 class="font-bold mb-3">Nombre:
                        <span class="font-normal">
                            {{$user->name}}
                        </span>
                    </h4>
                </div>
                <div class="pt-2">
                    <h4 class="font-bold mb-3">E-mail:
                        <span class="font-normal">
                            {{$user->email}}
                        </span>
                    </h4>
                </div>
            </div>

        </section>

        <section class="w-1/3 border-red border-2 rounded-2xl p-5 h-64 flex-grow-0">
            @if($profile)
            <div class="flex justify-between mb-10">
                <h2 class="text-">Logotipo</h2>
                @if(!$profile->logo)
                    <a href="{{route('logo.edit', $profile->id)}}" class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light flex-end">Subir</a>                    
                @else
                <form action="{{ route('logo.delete', $profile->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-backoffice-button 
                    txt="Borrar"/>                    
                </form>
                @endif
            </div>
            <div>
                <div class="">
                    <img src="
                    @if($profile->logo)
                        {{ asset('storage/logo/' . $profile->logo) }}
                    @else
                        {{ asset('storage/logo/placeholder-300x202.jpg') }}
                    @endif
                    " alt="Logotipo" >
                </div>
            </div>
            @else 
            <div class="flex justify-between mb-10">
            <h2>Para poder subir el logotipo necesitais crear el perfil de la organización</h2>
            </div>
            @endif
        </section>

        @if(!$profile)
        <section class=" border-red border-2 rounded-2xl p-5 flex justify-between ">
            <h3>Crear perfil de la organización</h3>
            <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light" href="{{route('dashboard.create')}}" type="button">
                Crear
            </a>

        </section>
        @else
        <section class=" border-red border-2 rounded-2xl p-5 relative flex-grow-1">
            <h2 class="text-xl">Perfil de la organización</h2>
            <a class="block bg-red hover:bg-red-lighter text-white font-bold p-2 text-md rounded border-b-4 border-red-light absolute top-5 right-5 text-center" href="{{route('dashboard.edit', $profile->id)}}" type="button">
                Actualizar
            </a>
            <div class="pt-10">
                <h4 class="font-bold mb-3">Nombre:
                    <span class="font-normal">
                        {{$profile->name}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3">Dirección:
                    <span class="font-normal">
                        {{$profile->direction}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3">Población:
                    <span class="font-normal">
                        {{$profile->city}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3">Código Postal:
                    <span class="font-normal">
                        {{$profile->postcode}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3">Teléfono:
                    <span class="font-normal">
                        {{$profile->phone}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3">Cuenta Bancaria:
                    <span class="font-normal">
                        {{$profile->bankAccount}}
                    </span>
                </h4>
                <h4 class="font-bold mb-3"> Bizum:
                    <span class="font-normal">
                        {{$profile->bizum}}
                    </span>
                </h4>

            </div>
        </section>
        @endif

        <section class="w-1/2 border-red border-2 rounded-2xl p-5 mb-20 flex justify-between ">
            <a class="" href="{{route('about')}}" type="button">
            Qui Som / Quien Somos
            </a>

        </section>
        <section class="w-1/2 border-red border-2 rounded-2xl p-5 mb-20 justify-between ">
            <h3 class="text-h3" >
            Que Pots Fer Tu / Que Puedes Hacer Tu
            </h3>

            <a class="" href="{{route('donate')}}" type="button">
            Donar / Donar
            </a>
            <a class="" href="{{route('explainTheProject')}}" type="button">
            Difusió / Difusión
            <a class="" href="{{route('volunteer')}}" type="button">
            Voluntari/ Voluntario
            </a>
            <a class="" href="{{route('volunteer')}}" type="button">
            Col·laborador / Colaborador
            </a>
        </section>
    </main>
</x-layout>


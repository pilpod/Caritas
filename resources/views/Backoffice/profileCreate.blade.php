<x-layout>
    <header class="border-b-2 border-red mb-20 pt-3 px-3">

        <h1 class="text-h2 mb-5">Caritas Escritorio</h1>
        <ul class="flex text-ui-main">
            <li class="mr-6">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-grey hover:text-red" type="submit">Desconectarse</button>
                </form>

            </li>
        </ul>

    </header>
    <div class="container mx-4 mt-20 w-1/2 border-red border-2 rounded-2xl p-10 text-body">
        <h2 class="mb-10 text-h3 text-center">Crear perfil de la organización</h2>
        <a class="absolute top-10 right-10 text-red" href="{{route('dashboard')}}">Atrás</a>
        <form method="POST" action="{{route('dashboard.store')}}">
            @csrf

                <div class="flex flex-col">
                    <label for="name">Nombre de la organización</label>
                    <input type="text" name="name" id="name" class="border-grey border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" placeholder="Nombre de la organización">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="flex flex-col">
                    <label for="direction">Dirección</label>
                    <input type="text" name="direction" id="direction" class="border-grey border-2 p-2 rounded mb-5 @error('direction') is-invalid @enderror" placeholder="Dirección">
                    @error('direction')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror

                </div>

                <div class="flex flex-col">
                    <label for="city">Población</label>
                    <input type="text" name="city" id="city" class="border-grey border-2 p-2 rounded mb-5 @error('city') is-invalid @enderror" placeholder="Población" required>
                    @error('city')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="postcode">Código Postal</label>
                    <input type="text" name="postcode" id="postcode" class="border-grey border-2 p-2 rounded mb-5 @error('postcode') is-invalid @enderror" placeholder="Código Postal" required>
                    @error('postcode')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone" class="border-grey border-2 p-2 rounded mb-5 @error('phone') is-invalid @enderror" placeholder="Teléfono" required>
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="bankAccount">Cuenta Bancaria</label>
                    <input type="text" name="bankAccount" id="bankAccount" class="border-grey border-2 p-2 rounded mb-5 @error('bankAccount') is-invalid @enderror" placeholder="Cuenta Bancaria" required>
                    @error('bankAccount')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="bizum">Bizum</label>
                    <input type="text" name="bizum" id="bizum" class="border-grey border-2 p-2 rounded mb-5 @error('bizum') is-invalid @enderror" placeholder="Bizum" required>
                    @error('bizum')
                    <div class="alert alert-danger">{{ $message }}
                    </div>
                    @enderror

                </div>

                <x-backoffice-button 
                txt="Crear"/>
        </form>
    </div>
</x-layout>
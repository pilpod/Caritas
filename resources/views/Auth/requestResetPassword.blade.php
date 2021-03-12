<x-layout>
    <div class="container mx-auto mt-72 w-1/3 border-red border-2 rounded-2xl p-10 text-body">
        <form method="POST" action="{{route('password.email')}}" class="flex flex-col">
            @csrf
            <div class="flex flex-col">
                <label class="mb-2" for="email">Para recuperar su contraseña, por favor,  introduzca su Correo Electrónico</label>
                <input id="email" type="email" class=" border-grey border-2 p-2 mb-10 rounded @error('email') is-invalid @enderror" name="email" placeholder="email" required autocomplete="email">

                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <x-backoffice-button 
            txt="Solicitar"/>
        </form>
    </div>
</x-layout>

</html>
<x-layout>
    <div class="container mx-auto mt-72 w-1/2 border-red border-2 rounded-2xl p-10">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{$request->route('token')}}">
            <div class=" flex flex-col">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class=" border-grey border-2 p-2 rounded mb-5 @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$request->email}}">

                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="flex flex-col">
                <label for="password" class="">Nueva Contraseña</label>
                <input id="password" type="password" class="border-grey border-2 p-2 rounded mb-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nueva Contraseña">
                @error('password')
                <span class="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="">Confirmar Nueva Contraseña</label>
                <input id="password-confirm" type="password" class="border-grey border-2 p-2 rounded mb-20" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Nueva Contraseña">
            </div>
            <input name="update" id="update" class="block w-1/2 mx-auto bg-red hover:bg-red-lighter text-white font-bold py-2 px-4 rounded border-b-4 border-red-light" type="submit" value="Actualizar">
        </form>
    </div>
</x-layout>
<x-layout>

    <div class="container mx-auto mt-72 w-1/2 border-red border-2 rounded-2xl p-10">
        <form method="POST" action="{{ route('register') }}" >
            @csrf
            <div class="flex flex-col">
                <label for="name" class="">Nombre</label>
                <input id="name" type="text" class=" border-grey border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="email" class="">Correo Electrónico</label>
                <input id="email" type="email" class="border-grey border-2 p-2 rounded mb-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electrónico">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="">Contraseña</label>
                <input id="password" type="password" class="border-grey border-2 p-2 rounded mb-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="password" class="">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" class="border-grey border-2 p-2 rounded mb-20" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
            </div>
            <input name="register" id="register" class=" block w-1/2 mx-auto bg-red hover:bg-red-lighter text-white font-bold py-2 px-4 rounded border-b-4 border-red-light" type="submit" value="Registrarse">
        </form>
    </div>
</x-layout>
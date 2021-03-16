<x-layout>
    <div class="container mx-auto mt-72 w-1/2 border-red border-2 rounded-2xl p-10 text-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="flex flex-col mb-5">
                        <label for="email">Correo Electrónico</label>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror border-grey border-2 p-2 rounded " name="email" required autocomplete="email">

                        @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="flex flex-col mb-10">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror border-grey border-2 p-2 rounded" name="password" required>
                        @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <a class="hover:text-red" href="{{ route('password.request') }}">
                            Recuperar Contraseña
                        </a>
                    </div>

                    <div class="mb-10">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Recuerdame
                        </label>
                    </div>
                    <button type="submit" class="block w-1/3 object-contain mx-auto bg-red hover:bg-red-lighter text-white font-bold py-2 px-4 rounded border-b-4 border-red-light">
                        Conectarse
                    </button>

            </form>
    </div>
</x-layout>
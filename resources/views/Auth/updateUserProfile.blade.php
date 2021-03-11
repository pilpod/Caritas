<x-layout>
<div class="text-body m-20">

    @if(session('status') == "profile-information-updated")
        <div>
            <h2 class="text-h2">Perfil actualizado con éxito</h2>
            <a class="hover:text-red" href="{{ route('dashboard') }}">Volver</a>
        </div>
    @else

    <form method="POST" action="{{ route('user-profile-information.update') }}" >
        @method("PUT")
        @csrf
        <div class="flex flex-col">
            <label for="name" class="">Nombre</label>
            <input id="name" type="text" class=" border-grey border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus placeholder="Nombre">
            @error('name', 'updateProfileInformation')
            <span class="invalid-feedback" role="alert" class="text-red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="email" class="">Correo Electrónico</label>
            <input id="email" type="email" class="border-grey border-2 p-2 rounded mb-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? auth()->user()->email}}" required autocomplete="email" placeholder="Correo Electrónico">
            @error('email', 'updateProfileInformation')
            <span class="invalid-feedback" role="alert"  class="text-red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <x-backoffice-button 
            txt="Actualizar" name="register" id="register" />
        </div>
    </form>
    @endif

    @if(session('status') == "password-updated")
        <div>
            <h2 class="text-h2">Contraseña actualizada con éxito</h2>
        </div>
        <a class="hover:text-red" href="{{ route('dashboard') }}">Volver</a>
    @else

    
    <form method="POST" action="{{ route('user-password.update') }}">
        @method("PUT")
        @csrf
        <div class="flex flex-col">
            <label for="current_password" class="">Contraseña actual</label>
            <input id="current_password" type="text" class=" border-grey border-2 p-2 rounded mb-5 @error('current_password') is-invalid @enderror" name="current_password" required placeholder="Contraseña actual">
            @error('current_password', 'updatePassword')
            <span class="invalid-feedback" role="alert"  class="text-red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="password" class="">Nueva Contraseña</label>
            <input id="password" type="password" class="border-grey border-2 p-2 rounded mb-5 @error('password') is-invalid @enderror" name="password" required placeholder="Nueva contraseña">
            @error('password', 'updatePassword')
            <span class="invalid-feedback" role="alert" class="text-red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="password_confirmation" class="">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" class="border-grey border-2 p-2 rounded mb-5 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required placeholder="Confirmar contraseña">
            @error('password_confirmation', 'updatePassword')
            <span class="invalid-feedback" role="alert" class="text-red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <x-backoffice-button 
            txt="Actualizar" name="update" id="update" />
        </div>
    </form>
    @endif
</div>
</x-layout>
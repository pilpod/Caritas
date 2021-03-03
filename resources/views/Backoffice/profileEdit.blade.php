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
    <div class="container sm mx-auto mt-20 w-1/2 border-red-300 border-2 rounded-2xl p-10 relative">
        <h2 class="mb-10 text-lg text-center">{{__('edit-profile-title')}}</h2>
        <a class="absolute top-10 right-10 text-red-500" href="{{route('dashboard')}}">Enrere</a>
        <form method="POST" action="{{ route('dashboard.update', $profile->id) }}">
            @method('PUT')
            @csrf
            <div class="flex flex-col">
                <label for="name">{{__('edit-profile-name')}}</label>
                <input type="text" name="name" id="name" class="border-gray-200 border-2 p-2 rounded mb-5 @error('name') is-invalid @enderror" value="{{$profile->name}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="direction">{{__('edit-profile-direction')}}</label>
                <input type="text" name="direction" id="direction" class="border-gray-200 border-2 p-2 rounded mb-5 @error('direction') is-invalid @enderror" value="{{ $profile->direction }}">
                @error('direction')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="city">{{__('edit-profile-city')}}</label>
                <input type="text" name="city" id="city" class="border-gray-200 border-2 p-2 rounded mb-5 @error('city') is-invalid @enderror" required value="{{ $profile->city }}">
                @error('city')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="phone">{{__('edit-profile-phone')}}</label>
                <input type="text" name="phone" id="phone" class="border-gray-200 border-2 p-2 rounded mb-5 @error('phone') is-invalid @enderror" required value="{{ $profile->phone }}">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="bankAccount">{{__('edit-profile-bankAccount')}}</label>
                <input type="text" name="bankAccount" id="bankAccount" class="border-gray-200 border-2 p-2 rounded mb-5 @error('bankAccount') is-invalid @enderror" required value="{{ $profile->bankAccount }}">
                @error('bankAccount')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="bizum">{{__('edit-profile-bizum')}}</label>
                <input type="text" name="bizum" id="bizum" class="border-gray-200 border-2 p-2 rounded mb-5 @error('bizum') is-invalid @enderror" required value="{{ $profile->bizum }}">
                @error('bizum')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>

            <button class="block btn w-1/2 mx-auto bg-red-500 hover:bg-red-300 text-white font-bold py-2 px-4 rounded border-b-4 border-red-500">{{__('buttons.update')}}</button>
        </form>
    </div>
</body>

</html>
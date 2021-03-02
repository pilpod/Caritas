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
        <h2>{{__('edit-profile-title')}}</h2>
        <form method="POST" action="{{route('dashboard.store')}}">
        @csrf
            <fieldset>
                <label for="direction">{{__('edit-profile-direction')}}</label>
                <input type="text" name="direction" id="direction"  class=" @error('direction') is-invalid @enderror" value="{{ $profile->direction }}">
                @error('direction')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
               
                <label for="city">{{__('create-profile-city')}}</label>
                <input type="text" name="city" id="city"  class=" @error('city') is-invalid @enderror" required value="{{ $profile->city }}">
                @error('city')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror

                <label for="phone">{{__('create-profile-phone')}}</label>
                <input type="text" name="phone" id="phone"  class=" @error('phone') is-invalid @enderror" required value="{{ $profile->phone }}">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror

                <label for="bankAccount">{{__('create-profile-bankAccount')}}</label>
                <input type="text" name="bankAccount" id="bankAccount"  class=" @error('bankAccount') is-invalid @enderror" required value="{{ $profile->bankAccount }}">
                @error('bankAccount')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror

                <label for="bizum">{{__('create-profile-bizum')}}</label>
                <input type="text" name="bizum" id="bizum"  class=" @error('bizum') is-invalid @enderror" required value="{{ $profile->bizum }}">
                @error('bizum')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror

                <button>{{__('buttons.update')}}</button>
            </fieldset>
        </form>
    </div>
</body>

</html>
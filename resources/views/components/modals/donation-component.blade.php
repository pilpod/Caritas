<a href="#"><h1 class="text-h1 text-right mr-6">x</h1></a>
<div id="container" class="bg-white-dark text-black text-center mx-4 text-mobile-main rounded-3xl">
    <h1 class="text-h1 m-4"> {{__('donation-title')}}</h1>
    <p class="my-4">
        {{__('donation-account')}} 
        <br>
        <br>
        {{ $profile->bankAccount }} <br>
        {{__('donation-bizum')}}<br>
        {{ $profile->bizum }}
    </p>
    <p  class="my-4">
        {{__('donation-tax-relief-title')}}
        <br>
        <br>
        {{__('donation-tax-relief-text')}}
        <x-anchor
        href="mailto:santjosepbdn@gmail.com" 
        txt="santjosepbdn@mail.com"/>{{__('donation-tax-relief-text-2')}} 
        <br>
        {{__('donation-tax-relief-data-particular')}}
        <br>
        {{__('donation-tax-relief-data-entidad')}}         

    </p>
    <div class="flex flex-col items-center border-2 border-red bg-donar bg-center bg-cover rounded-3xl my-10">
        <img class="relative left-20 bottom-16" src="{{ asset('storage/img/decoLogoIzq.png')}}" alt="">
        <p class="m-2">
            {{__('donation-10')}}
        </p>
        <img class="w-20 h-20 m-4" src="{{ asset('storage/img/milk.png')}}" alt="">
        <p class="m-2">
            {{__('donation-20')}}
        </p>  
        <img class="w-20 h-20 m-4" src="{{ asset('storage/img/pasta.png')}}" alt="">
        <p class="m-2"> 
             {{__('donation-50')}}
        </p>
        <img class="w-32 h-32 m-4" src="{{ asset('storage/img/fish.png')}}" alt="">
        <p class="m-2">
            {{__('donation-+50')}}
        </p>
        <img class="w-20 h-20 m-6" src="{{ asset('storage/img/soap.svg')}}" alt="">
        <img class="relative right-24 top-10 w-24 z-2" src="{{ asset('storage/img/decoLogoDrch.png')}}" alt="">
    </div>
</div>
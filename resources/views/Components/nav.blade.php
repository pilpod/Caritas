<nav id="navBox" class="top-0 fixed bg-white-dark w-screen text-xs p-2">
    {{-- mobile --}}
    <div class="flex flex-row justify-between md:hidden">
        <x-logo class="flex self-start" href="https://www.santjosepbadalona.cat/" />
        <x-burguerMenu class="flex self-end mr-6 mt-6" />
    </div>    
    {{-- desktop --}}
    <div class="hidden md:flex flex-row justify-evenly items-center">
        <div class="w-20%">
            <button > CATALÀ </button> 
        </div>
        <div class="w-20% relative left-4">
            <button href="qui-som"> {{ __('nav.Quiénes') }} </button> 
        </div>
        <x-logo class="flex self-center" href="https://www.santjosepbadalona.cat/" />
        <div class="w-20%">
            <button href="qui-som">QUE PUEDES <br> HACER TU?</button> 
        </div>
        <div class="w-20%">    
            <button href="qui-som">CONTACTA</button> 
        </div>
    </div>
</nav>
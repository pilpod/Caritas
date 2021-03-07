<nav id="navBox" class="text-xs p-2">
    {{-- mobile --}}
    <div class="flex flex-row justify-between md:hidden">
        <x-logo class="flex self-start" href="https://www.santjosepbadalona.cat/" />
        <x-burguerMenu class="flex self-end mr-6 mt-6" />
    </div>    
    {{-- desktop --}}
    <div class="hidden md:flex flex-row justify-evenly items-center">
        <div class="w-20%">
            <button > CATALA </button> 
        </div>
        <div class="w-20%">
            <button href="qui-som">QUIENES SOMOS?</button> 
        </div>
        <x-logo class="flex self-center" href="https://www.santjosepbadalona.cat/" />
        <div class="w-20%">
            <button href="qui-som">QUE PUEDES HACER TU?</button> 
        </div>
        <div class="w-20%">    
            <button href="qui-som">CONTACTA</button> 
        </div>
    </div>
</nav>
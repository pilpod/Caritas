<div id="hero" class="bg-hero bg-cover bg-center flex flex-col py-16 place-items-center mt-24 lg:place-content-center lg:h-540px lg:gap-16">
    <div id="heroText" class="px-6 py-20 text-white text-center lg:flex lg:flex-col lg:max-w-7xl lg:gap-8">
        <h1 class="text-h1 font-black lg:text-d-h1">{{ __('hero-titulo')  }}</h1>
        <p class="lg:text-d-body">{{ __('hero-texto') }}</p>
    </div>
    <x-button txt="{{ __('hero-boton') }}" normal-modal><x-modals.donation-component /></x-button>
</div>
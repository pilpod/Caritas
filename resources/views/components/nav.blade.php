<nav id="navBox" class="nav">
@if(app()->getLocale() == 'es')
    <x-button txt="{{ __('nav-idioma-catalan') }}" url="{{ route('language', 'cat') }}" nav-url/>
@else
    <x-button txt="{{ __('nav-idioma-castellano') }}" url="{{ route('language', 'es') }}" nav-url/>
@endif
    <x-button txt="{{ __('nav-quienes-somos') }}" nav-modal><x-modals.who-we-are /></x-button>
    <x-test-component href="https://www.santjosepbadalona.cat/" class="nav__logo"/>
    {{-- <x-logo href="https://www.santjosepbadalona.cat/" class="nav__logo" /> --}}
    <x-button txt="{{ __('nav-que-puedes-hacer-tu') }}" nav-modal><x-modals.what-u-can-do /></x-button>
    <x-button txt="{{ __('nav-contacto') }}" nav-modal>Content</x-button>
    <x-burguer-menu class="lg:hidden"/>
    
</nav>


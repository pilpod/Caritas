<nav class="nav">
    @if(app()->getLocale() == 'es')
    <a href="{{ route('language', 'cat') }}" class="nav__btn">{{ __('nav-idioma-catalan') }}</a>
    @else
    <a href="{{ route('language', 'es') }}" class="nav__btn">{{ __('nav-idioma-castellano') }}</a>
    @endif
    <button class="nav__btn">{{ __('nav-quienes-somos') }}</button>
    <x-logo href="https://www.santjosepbadalona.cat/" class="nav__logo"/>
    <button class="nav__btn">{{ __('nav-que-puedes-hacer-tu') }}</button>
    <button class="nav__btn">{{ __('nav-contacto') }}</button>
    <x-burguer-menu class="md:hidden"/>
</nav>
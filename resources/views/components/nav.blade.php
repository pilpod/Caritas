<nav class="nav">
    @if(app()->getLocale() == 'cat')
    <button class="nav__btn">{{ __('nav-idioma-catalan') }}</button>
    @else
    <button class="nav__btn">{{ __('nav-idioma-castellano') }}</button>
    @endif
    <button class="nav__btn">{{ __('nav-quienes-somos') }}</button>
    <x-logo href="https://www.santjosepbadalona.cat/" class="nav__logo"/>
    <button class="nav__btn">{{ __('nav-que-puedes-hacer-tu') }}</button>
    <button class="nav__btn">{{ __('nav-contacto') }}</button>
    <x-burguer-menu class="md:hidden"/>
</nav>
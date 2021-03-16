<x-layout>
<x-nav />
<main class="flex flex-col items-center gap-20">
    <section>
        <x-hero />
        <x-iframe src="https://www.youtube.com/embed/Rqt5B2Ko0Es"/>
    </section>
<x-separator />
    <section class="flex flex-row items-center my-10 mx-6">
        <img class="hidden md:flex flex-start rounded-r-full h-72" src="{{ asset('storage/img/SectionOneLeft.jpg') }}" alt="Caritas Logo"/>
        <div class="flex flex-col gap-12 mx-6">
            <h2 class="text-h2 p-3 text-center font-black">{{ __('necesidades-basicas-titulo') }}</h2>
            <p class="inline-flex flex-col gap-8 ">
                <span>
                    <b>{{ __('necesidades-basicas-paragrafo1-destacado1') }}</b> {{ __('necesidades-basicas-paragrafo1') }}
                </span>
                <span>
                    {{ __('necesidades-basicas-paragrafo2') }} <b>{{ __('necesidades-basicas-paragrafo2-destacado1') }}</b>
                </span>
                <span>
                    {{ __('necesidades-basicas-paragrafo3-parte1') }} <b>{{ __('necesidades-basicas-paragrafo3-destacado1') }}</b>, {{ __('necesidades-basicas-paragrafo3-parte2') }} <b>{{ __('necesidades-basicas-paragrafo3-destacado2') }}</b>.{{ __('necesidades-basicas-paragrafo3-parte3') }}
                </span>
                <span>
                    <b>{{ __('necesidades-basicas-paragrafo4-destacado1') }}</b>, {{ __('necesidades-basicas-paragrafo4') }}
                </span>
            </p>
        </div>
        <img class="hidden md:flex flex-end rounded-l-full h-72" src="{{ asset('storage/img/SectionOneRight.jpg') }}" alt="Caritas Logo"/>
    </section>
<x-separator />
    <section class="flex flex-col items-center gap-20 mx-6">
        <x-mini-hero presentation="reverse" filename="family.svg" alt="" class="gap-4">
            <h2 class="text-h2 text-center font-black">{{ __('necesidades-familias-titulo') }}</h2>
        </x-mini-hero>
        <div class="flex flex-col gap-24">
            <x-downtick-list title="{{ __('necesidades-familias-seccion1-trabajo') }}">
                <li>{{ __('necesidades-familias-seccion1-punto1') }}</li>
                <li>{{ __('necesidades-familias-seccion1-punto2') }}</li>
                <li>{{ __('necesidades-familias-seccion1-punto3') }}</li>
            </x-downtick-list>
            <x-downtick-list title="{{ __('necesidades-familias-seccion2-titulo') }}">
                <li>{{ __('necesidades-familias-seccion2-punto1') }}</li>
                <li>{{ __('necesidades-familias-seccion2-punto2') }}</li>
            </x-downtick-list>
            <x-downtick-list title="{{ __('necesidades-familias-seccion3-titulo') }}">
                <li>{{ __('necesidades-familias-seccion3-punto1') }}</li>
                <li>{{ __('necesidades-familias-seccion3-punto2') }}</li>
                <li>{{ __('necesidades-familias-seccion3-punto3') }}</li>
            </x-downtick-list>
        </div>
            <x-mini-hero presentation="reverse" filename="giving.svg" alt="" class="gap-4">
                <h2 class="text-h2 p-3 text-center font-black">{{ __('modelo-antiguo-titulo') }}</h2>
            </x-mini-hero>
        <ul class="font-bold text-body gap-12">
            <li>{{ __('modelo-antiguo-punto1') }}</li>
            <li>{{ __('modelo-antiguo-punto2') }}</li>
            <li>{{ __('modelo-antiguo-punto3') }}</li>
            <li>{{ __('modelo-antiguo-punto4') }}</li>
        </ul>
    </section>
<x-separator />
    <section class="flex flex-col mx-6 gap-40">
    <h2 class="text-h2 text-center p-3 font-black">{{ __('nuestro-modelo-titulo') }}</h2>
        <x-mini-hero presentation="reverse" filename="innovation.svg" alt="" class="gap-20">
            <ul class="font-bold gap-12">
                <li>{{ __('nuestro-modelo-punto1') }}</li>
                <li>{{ __('nuestro-modelo-punto2') }}</li>
                <li>{{ __('nuestro-modelo-punto3') }}</li>
                <li>{{ __('nuestro-modelo-punto4') }}</li>
                <li>{{ __('nuestro-modelo-punto5') }}</li>
            </ul>
        </x-mini-hero>
        <x-mini-hero presentation="reverse" filename="bestof.svg" alt="" class="gap-20">
            <ul class="font-bold gap-12">
                <li>{{ __('nuestro-modelo-punto6') }}</li>
                <li>{{ __('nuestro-modelo-punto7') }}</li>
                <li>{{ __('nuestro-modelo-punto8') }}</li>
                <li>{{ __('nuestro-modelo-punto9') }}</li>
                <li>{{ __('nuestro-modelo-punto10') }}</li>
            </ul>
        </x-mini-hero>
    </section>
<x-separator />
    <section class="text-center flex flex-col items-center mx-6 gap-20">
        <div class="flex flex-col gap-8">
            <p class="text-h5 font-black">{{ __('seccion-videos-subtitulo') }}</p>
            <h2 class="text-h2 font-black">{{ __('seccion-videos-titulo') }}</h2>
        </div>
        <button class="btn">{{ __('hero-boton') }}</button>
    </section>
</main>
    <x-footer :profile="$profile" class="mt-20"/>
    <x-back-to-top />
</x-layout>
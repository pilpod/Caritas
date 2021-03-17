@props(['profile'])

<footer {{ $attributes->merge(['class' => 'flex flex-col gap-5 bg-white-dark text-grey']) }}>
<x-separator skinny />
  <section class="flex justify-between text-ui-tiny mx-6">
      <ul class="gap-2 uppercase w-2/6">
        <li class="list-none"><x-anchor href="#" txt="{{ __('footer-politica-cookies') }}" /></li>
        <li class="list-none"><x-anchor href="#" txt="{{ __('footer-politica-privacidad') }}" /></li>
        <li class="list-none"><x-anchor href="#" txt="{{ __('footer-aviso-legal') }}" /></li>
      </ul>
  <x-logo href="#" container="w-2/6" class="w-24 h-24"/>
      <ul class="gap-2 w-2/6">
        <li class="list-none"><x-anchor href="https://www.caritascatalunya.cat/" target="_blank"txt="{{ __('footer-caritas-cataluna') }}" /></li>
        <li class="list-none"><x-anchor href="https://www.caritas.es/" target="_blank"txt="{{ __('footer-caritas-espana') }}" /></li>
        <li class="list-none"><x-anchor href="https://www.caritas.eu/" target="_blank"txt="{{ __('footer-caritas-europa') }}" /></li>
        <li class="list-none"><x-anchor href="https://www.caritas.org/" target="_blank"txt="{{ __('footer-caritas-internacional') }}" /></li>
      </ul>
  </section>
<x-separator skinny traslucid/>
  <section class="flex flex-col text-ui-tiny mx-6 gap-10 text-center mb-4">
        <div class="flex flex-col gap-4 items-center">
          <x-anchor href="mailto:santjosepbdn@gmail.com" filename="location.svg" txt="santjosepbdn@mail.com" />
          <x-anchor href="#" filename="message.svg" txt="{{ $profile->direction }}, {{ $profile->postcode }} {{ $profile->city }}" />
        </div>
        <x-anchor href="#" txt="Copyright © 2021 • Cáritas Española"  class="opacity-50 self-center" />
  </section>
</footer>
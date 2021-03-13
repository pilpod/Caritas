<footer {{ $attributes->merge(['class' => 'flex flex-col gap-5 bg-white-dark text-grey']) }}>
<x-separator skinny />
  <section class="flex justify-between text-ui-tiny mx-6">
      <ul class="gap-2 uppercase w-2/6">
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Política de cookies" />
        </li>
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Política de privacidad" />
        </li>
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Aviso legal" />
        </li>
      </ul>
  <x-logo href="https://www.santjosepbadalona.cat/" container="w-2/6" class="w-24 h-24"/>
      <ul class="gap-2 w-2/6">
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Cáritas Catalunya" />
        </li>
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Cáritas España" />
        </li>
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Cáritas Europa" />
        </li>
        <li class="list-none">
          <x-anchor 
          href="#" 
          txt="Cáritas Internacional" />
        </li>
      </ul>
  </section>
<x-separator skinny traslucid/>
  <section class="flex flex-col text-ui-tiny mx-6 gap-10 text-center mb-4">
        <div class="flex flex-col gap-4 items-center">
          <x-anchor
          href="mailto:santjosepbdn@gmail.com"
          filename="location.svg"
          txt="santjosepbdn@mail.com" />
          <x-anchor
          href="#"
          filename="message.svg"
          txt="Església de Sant Josep C/ Enric Borràs, 69-75 08912 Badalona" />
        </div>
        <x-anchor
        href="#"
        txt="Copyright © 2021 • Cáritas Española" 
        class="opacity-50 self-center" />
  </section>
</footer>
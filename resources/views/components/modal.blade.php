  <button @click="open = true" class="nav__btn">Open Modal</button>
  <div class="modal__overlay" x-show="open">
    <button @click="open = false" class="modal__close">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="modal__close-svg">
          <path d="M24 4.365L19.635 0L12 7.635L4.365 0L0 4.365L7.635 12L0 19.635L4.365 24L12 16.365L19.635 24L24 19.635L16.365 12L24 4.365Z" fill="black"/>
        </svg>
    </button>
    <div class="modal__dialog" @click.away="open = false">
      {{ $slot }}
    </div>
  </div>
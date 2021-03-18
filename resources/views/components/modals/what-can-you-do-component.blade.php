<h2 class="text-h3 lg:text-h2 flex text-center justify-center mb-6">{{__('nav-que-puedes-hacer-tu')}}</h2>
    <div class="flex justify-center text-body lg:text-d-body">
     
      <x-cards filename="{{ $volunteerImg }}" titleCard="Voluntario" button="Voluntariado">
        @if(app()->getLocale() == 'es' )  {!! html_entity_decode($volunteerEs) !!}
        @else  {!! html_entity_decode($volunteerCat) !!}
        @endif
        <div class="h-8 w-12">
          <x-button txt="{{ __('volunteer-btn') }}" normal></x-button>
        </div> 
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $explainTheProjectImg }}" titleCard="Difusion" button="Difundir">
        @if(app()->getLocale() == 'es')  {!! html_entity_decode($explainTheProjectEs) !!}
        @else  {!! html_entity_decode($explainTheProjectCat) !!}
        @endif
        <div class="h-8 w-12">
          <x-button txt="{{ __('explain-the-project-btn') }}" normal></x-button>
        </div> 
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $partnerImg }}" titleCard="Colaborador" button="Colaborar">
        @if(app()->getLocale() == 'es')  {!! html_entity_decode( $partnerEs) !!}
        @else  {!! html_entity_decode($partnerCat) !!}
        @endif
        <div class="h-12 w-24">
          <x-button txt="{{ __('partner-btn') }}" normal></x-button>
        </div> 
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $donateImg }}" titleCard="Donar" button="Donar">
        @if(app()->getLocale() == 'es')  {!! html_entity_decode($donateEs) !!}
        @else  {!! html_entity_decode($donateCat) !!}
        @endif
        <div class="">
          <x-button txt="{{ __('donation-title') }}" normal-modal><x-modals.donation-component /></x-button>
        </div>  
      </x-cards>
    </div>
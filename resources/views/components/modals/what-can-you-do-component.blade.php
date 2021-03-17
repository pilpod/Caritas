<h2 class="text-h3 flex text-center justify-center mb-6">QUE PUEDES HACER TU</h2>
    <div class="flex justify-center">
     
      <x-cards filename="{{ $volunteerImg }}" titleCard="Voluntario" button="Voluntariado">
        @if(app()->getLocale() == 'es' ) {{ $volunteerEs }} 
        @else {{ $volunteerCat }}
        @endif
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $explainTheProjectImg }}" titleCard="Difusion" button="Difundir">
        @if(app()->getLocale() == 'es') {{ $explainTheProjectEs }}
        @else {{ $explainTheProjectCat }}
        @endif
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $partnerImg }}" titleCard="Colaborador" button="Colaborar">
        @if(app()->getLocale() == 'es') {{ $partnerEs }}
        @else {{ $partnerCat }}
        @endif
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $donateImg }}" titleCard="Donar" button="Donar">
        @if(app()->getLocale() == 'es') {{ $donateEs }}
        @else {{ $donateCat }}
        @endif
      </x-cards>
    </div>
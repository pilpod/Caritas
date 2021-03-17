<h2 class="text-h3 flex text-center justify-center mb-6">QUE PUEDES HACER TU</h2>
    <div class="flex justify-center">
     
      <x-cards filename="{{ $volunteerImg }}" titleCard="Voluntario" button="Voluntariado">
        {{ $volunteerEs }}
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $explainTheProjectImg }}" titleCard="Difusion" button="Difundir">
        {{ $explainTheProjectEs }}
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $partnerImg }}" titleCard="Colaborador" button="Colaborar">
          {{ $partnerEs }}
      </x-cards>
    </div>
    <div class="flex justify-center">
      <x-cards filename="{{ $donateImg }}" titleCard="Donar" button="Donar">
        {{ $donateEs }}
      </x-cards>
    </div>
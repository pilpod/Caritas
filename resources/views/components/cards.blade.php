@props(['titleCard', 'filename', 'button'])
​
​
<div class="flex flex-row w-11/12 my-5 border-grey-light border p-2 rounded">
  <div class="w-2/4 ">
    <img class="w-full h-full object-cover p-2" src="{{ asset('storage/section/' . $filename) }}" alt="">
  </div>  
    <div class="flex flex-col normal-case">
      <p class="font-sans">{{ $titleCard }}</p>
      {{ $slot }}
      <div class="flex flex-row-reverse">
      
      </div>
    </div>
</div>
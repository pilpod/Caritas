@props(['titleCard', 'filename', 'button'])
​
​
<div class="flex flex-row w-11/12 my-5 border-grey-light border p-2 rounded">
    <img class="w-1/6 p-2" src="{{ asset('storage/section/' . $filename) }}" alt="">
    <div class="flex flex-col">
      <p class="font-bold">{{ $titleCard }}</p>
      {{ $slot }}
      <div class="flex flex-row-reverse">
      <button type="button" class="text-white text-mobile-tiny bg-gradient-to-b from-red-lighter via-red-light to-red border-red object-center my-6 p-2.5 rounded">{{$button ?? ''}}</button>
      </div>
    </div>
</div>
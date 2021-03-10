@props(['txt' => '', 'modalBody'])

<div>
    <button @click="showModal = true">{{ $txt }}</button>
    <div x-show="showModal" @click.away="showModal = false" class="flex justify-center content-center bg-black bg-opacity-20 w-screen h-screen">
    <div class="w-10/12 bg-white">{{ $modalBody ?? 'Sin contenido' }}</div>
    </div>
</div>

<div>
    <button @click="showModal = true">{{ $txt }}</button>
    <div x-show="showModal" @click.away="showModal = false" class="flex justify-center content-center bg-black bg-opacity-20 w-screen h-screen">
    <div class="w-10/12 bg-white">{{ $modalBody ?? 'Sin contenido' }}</div>
    </div>
</div>
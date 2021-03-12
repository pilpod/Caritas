@props(['txt' => '', 'name' => '', 'id' => '' ])

<button name="{{ $name }}" id="{{ $id }}" class=" mx-auto bg-red hover:bg-red-lighter text-white font-bold py-2 px-4 rounded border-b-4 border-red-light" type="submit">{{ $txt }}</button>
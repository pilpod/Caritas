<x-backoffice-layout>
    <div class="flex flex-col text-body text-center gap-20 border-2 border-red mt-40 w-3/4 mx-auto p-8 rounded-2xl">
        <h2 class="text-h2">Donar / Donar</h2>
        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Actualizar Imagen</h3>
            <img src="{{ asset('storage/section/' . $section->section_image) }}" alt="Qui Som">
            <form method="POST" action="{{route('donate.updateImage', $section->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <label class="block" for="section_image">Imagen de Sección</label>
                <input type="file" name="section_image" @error('section_image') is-invalid @enderror placeholder="Seleccionar Imagen">
                @error('section_image')
                <div>{{$message}}</div>
                @enderror

                <x-backoffice-button txt="Cargar" />
            </form>
        </section>

        @if ($catData == null && $spanishData == null)
        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Crear Donar Contenido</h3>
            <form method="POST" action="{{ route('donate.store') }}">
                    @csrf
                    <label class="block" for="text_content">Texto en Castellano</label>
                    <textarea id="editor1" name="spanish_donate_text" id="" cols="30" rows="25"  @error('spanish_donate_text') is-invalid {{ old('spanish_donate_text') }}@enderror></textarea>

                    <label class="block" for="text_content">Texto en Catalan</label>
                    <textarea id="editor2" name="catalan_donate_text" id="" cols="30" rows="25"  @error('catalan_donate_text') is-invalid {{ old('catalan_donate_text') }} @enderror></textarea>
                    <button type="submit" class="">Cargar</button>
                </form>
        </section>
        @else
                <section class="flex flex-col gap-10">
                    <h3 class="text-h3">Actualizar Donar Contenido</h3>
                    <form method="POST" action="{{ route('donate.update', $section->id) }}">
                        @method('PUT')
                        @csrf
                        <label class="block" for="text_content">Texto en Castellano</label>
                        <textarea id="editor1" name="text_content"  cols="30" rows="25"  @error('text_content') is-invalid {{ old('text_content') }}@enderror>{{ $spanishData->text_content }}</textarea>
                        <input type="hidden" name="lang_id" value="{{ $spanishData->lang_id }}">
                        <button type="submit" class="">Cargar</button>
                    </form>
                </section>
        
                <section class="flex flex-col gap-10">
                    <h3 class="text-h3">Actualizar Donar Contenido</h3>
                    <form method="POST" action="{{ route('donate.update', $section->id) }}">
                        @method('PUT')
                        @csrf
                        <label class="block" for="text_content">Texto en Catalan</label>
                        <textarea id="editor2" name="text_content" cols="30" rows="25"  @error('text_content') is-invalid {{ old('text_content') }} @enderror>{{ $catData->text_content }}</textarea>
                        <input type="hidden" name="lang_id" value="{{ $catData->lang_id }}">
                        <button type="submit" class="">Cargar</button>
                    </form>
                </section>
            @endif
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ), {
                toolbar: [ 'bold', 'italic', 'link', 'bulletedList' ],
            } )
            .then( editor => { console.log( editor ); } )
            .catch( error => { console.error( error ); } );

            ClassicEditor
            .create( document.querySelector( '#editor2' ), {
                toolbar: [ 'bold', 'italic', 'link', 'bulletedList' ],
            } )
            .then( editor => { console.log( editor ); } )
            .catch( error => { console.error( error ); } );
    </script>
</x-backoffice-layout>
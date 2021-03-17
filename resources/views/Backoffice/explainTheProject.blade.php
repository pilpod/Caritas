<x-backoffice-layout>
    <div class="flex flex-col relative text-body text-center gap-20 border-2 border-red mt-40 w-3/4 mx-auto p-8 rounded-2xl">
        <h2 class="text-h2">Difusió / Difusión</h2>
        <a class="absolute top-10 right-10 hover:text-red" href="{{route('dashboard')}}">Atrás</a>
        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Actualizar Sección</h3>
            <div class="w-2/3 self-center">
                <img src="{{ asset('storage/section/' . $section->section_image) }}" alt="Difusion Imagen">
            </div>
            <form method="POST" action="{{route('explainTheProject.updateImage', $section->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <label class="block" for="section_image">Actualizar Imagen</label>
                <input type="file" name="section_image" @error('section_image') is-invalid @enderror placeholder="Seleccionar Imagen">
                @error('section_image')
                <div>{{$message}}</div>
                @enderror

                <x-backoffice-button txt="Cargar" />
            </form>
        </section>

        @if ($catData == null && $spanishData == null)
        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Crear Texto Difusió / Difusión</h3>

            <form method="POST" action="{{ route('explainTheProject.store') }}">
                @csrf
                <label class="block" for="text_content">Texto en Castellano</label>
                <textarea id="editor1" name="spanish_explainTheProject_text" id="" cols="30" rows="25" @error('spanish_explainTheProject_text') is-invalid {{ old('spanish_explainTheProject_text') }}@enderror></textarea>

                <label class="block" for="text_content">Texto en Catalan</label>
                <textarea id="editor2" name="catalan_explainTheProject_text" id="" cols="30" rows="25" @error('catalan_explainTheProject_text') is-invalid {{ old('catalan_explainTheProject_text') }} @enderror></textarea>
                <x-backoffice-button txt="Guardar" />
            </form>
        </section>
        @else
        <section class="flex flex-col gap-10 mb-10">
            <h3 class="text-h3">Actualizar Texto Quiénes Somos</h3>
            <form class="flex flex-col gap-10" method="POST" action="{{ route('explainTheProject.update', $section->id) }}">
                @method('PUT')
                @csrf
                <label class="block" for="text_content">Texto en Castellano</label>
                <textarea id="editor1" name="text_content" cols="30" rows="25" @error('text_content') is-invalid {{ old('text_content') }}@enderror>{{ $spanishData->text_content }}</textarea>
                <input type="hidden" name="lang_id" value="{{ $spanishData->lang_id }}">

                <x-backoffice-button txt="Guardar" />
            </form>
        </section>

        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Actualizar Texto Qui Som</h3>
            <form class="flex flex-col gap-10" method="POST" action="{{ route('explainTheProject.update', $section->id) }}">
                @method('PUT')
                @csrf
                <label class="block" for="text_content">Texto en Catalan</label>
                <textarea id="editor2" name="text_content" cols="30" rows="25" @error('text_content') is-invalid {{ old('text_content') }} @enderror>{{ $catData->text_content }}</textarea>
                <input type="hidden" name="lang_id" value="{{ $catData->lang_id }}">
                <x-backoffice-button txt="Guardar" />
            </form>
        </section>
        @endif
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'), {
                toolbar: ['bold', 'italic', 'link', 'bulletedList'],
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'), {
                toolbar: ['bold', 'italic', 'link', 'bulletedList'],
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</x-backoffice-layout>
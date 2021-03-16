<x-backoffice-layout>
    <div class="flex flex-col text-body text-center gap-20 border-2 border-red mt-40 w-3/4 mx-auto p-8 rounded-2xl">
        <h2 class="text-h2">Donar / Donar</h2>
        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Actualizar Imagen</h3>
            <form method="POST" action="{{route('donate.updateImage', $sectionId)}}" enctype="multipart/form-data">
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
        <section class="flex flex-col gap-10">
            <h3 class="text-h3">Actualizar Donar Contenido</h3>
            <form action="POST">
            </form>
        </section>
    </div>

</x-backoffice-layout>
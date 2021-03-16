<x-backoffice-layout>
    <div>
        <form method="POST" action="{{route('explainTheProject.updateImage', $sectionId)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <label for="section_image">Imagen de Sección</label>
            <input type="file" name="section_image" @error('section_image') is-invalid @enderror placeholder="Seleccionar image">
            @error('section_image')
            <div>{{$message}}</div>
            @enderror

            <x-backoffice-button txt="Cargar"/> 
        </form>
    </div>
    <div>
        <form action="POST">
        </form>
    </div>

</x-backoffice-layout>
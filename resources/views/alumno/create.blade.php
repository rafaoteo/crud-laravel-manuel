@extends("alumno.layout")

@section("titulo")
    <h2>Dar de alta nuevo alumno</h2>
@endsection

@section("opciones")
    <a href="{{route('alumno.index')}}" class="btn btn-success mb-2">Volver al listado</a>
@endsection

@section("contenido")
    <form action="{{route('alumno.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control"  name="nombre" placeholder="Inserta nombre">

            <label for="dni">DNI</label>
            <input type="text" class="form-control" placeholder="DNI" name ="dni">
        </div>
        <div class="form-group">
            <label for="nombre">Dirección </label>
            <input type="text" class="form-control" placeholder="Dirección" name="direccion">

            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" placeholder="Teléfono" name="telefono">

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
@endsection

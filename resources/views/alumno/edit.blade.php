@extends("alumno.layout")

@section("titulo")
    <h2>Dar de alta nuevo alumno</h2>
@endsection

@section("opciones")
    <a href="{{route('alumno.index')}}" class="btn btn-success mb-2">Volver al listado</a>
@endsection

@section("contenido")
    <form action="{{route('alumno.update',[$alumno])}}" method="POST">
        @csrf

        @method("PUT")
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" value="{{$alumno->nombre}}" name="nombre" placeholder="Inserta nombre">

            <label for="dni">DNI</label>
            <input type="text" class="form-control" placeholder="DNI" value="{{$alumno->dni}}"name ="dni">
        </div>
        <div class="form-group ">
            <label for="nombre">Dirección </label>
            <input type="text" class="form-control" placeholder="Dirección" value="{{$alumno->direccion}}"name="direccion">

            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" placeholder="Teléfono" value="{{$alumno->telefono}}"name="telefono">

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
@endsection


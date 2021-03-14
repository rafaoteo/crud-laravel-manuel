<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud de alumnos Rafa</title>
    <link rel="stylesheet" href="{{asset ('./css/app.css')}}">

    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="alert-primary align-items-center p-3 m-5" >Crud de alumnos Rafa </h1>
    </div>
    <div class="row">
        @yield("titulo")
    </div>

    <div class="row">
        @yield("mensaje")
    </div>

    <div class="row">
        @yield("opciones")
    </div>
        <div class="col">
            @yield("contenido")
        </div>
    </div>

</body>
</html>

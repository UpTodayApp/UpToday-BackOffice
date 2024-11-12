<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/modificar.css">
    <title>Modificar Evento</title>
</head>

<body>
    @include("base.header")

    <h3>Modificar un evento</h3>


    <form class="formulario" action="/modificarEvento" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $evento -> id }}">
        <label for="">Id Usuario: </label><input type="text" name="usuario_id" value="{{ $evento -> usuario_id }}"> <br>
        Nombre: <input type="text" name="nombre" value="{{ $evento -> nombre }}"> <br>
        Detalles: <input type="text" name="detalles" value="{{ $evento -> detalles }}"> <br>
        Participan: <input type="text" name="participan" value="{{ $evento -> participan }}"> <br>
        Ubicacion: <input type="text" name="ubicacion" value="{{ $evento -> ubicacion }}"> <br>
        Fecha: <input type="date" name="fecha" value="{{ $evento -> fecha }}"> <br>

        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/modificar.css">
    <title>Modificar Comentario</title>
</head>

<body>
    @include("base.header")

    <h3>Modificar Comentario</h3>

    <form class="formulario" action="/modificarComentario" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $comentario -> id }}">
        <label for="contenido">Contenido: </label>
        <input type="text" name="contenido" value="{{ $comentario -> contenido }}"><br>

        <input type="submit" value="Enviar" class="enviar">
    </form>
</body>

</html>
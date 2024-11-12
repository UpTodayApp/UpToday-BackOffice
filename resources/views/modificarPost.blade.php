<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/modificar.css">
    <title>Modificar Post</title>
</head>

<body>
    @include("base.header")

    <h3>Modificar un Post</h3>

    <form class="formulario" action="/modificarPost" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $post -> id }}">
        <label for="contenido">Contenido: </label><input type="text" name="contenido" value="{{ $post -> contenido }}"> <br><br>
        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/crear.css">
    <title>Crear Me Gusta Post</title>
</head>

<body>
    @include("base.header")

    <h3>Crear un me gusta comentario</h3>
    <form class="formulario" action="/crearmegustaComentario" method="post">
        @csrf
        <label for="usuario_id">Id Usuario: </label><input type="text" name="usuario_id"> <br>
        <label for="comentario_id">Id Comentario: </label><input type="text" name="comentario_id"> <br><br>
        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html
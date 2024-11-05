<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/crear.css">
    <title>Crear Me gusta Post</title>
</head>

<body>
    @include("base.header")

    <h3>Crear un me gusta en post</h3>

    <form class="formulario" action="/crearmegustaPost" method="post">
        @csrf
        <label for="usuario_id">Id Usuario: </label><input type="text" name="usuario_id"> <br>
        <label for="post_id">Id Post: </label><input type="text" name="post_id"> <br><br>
        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html>
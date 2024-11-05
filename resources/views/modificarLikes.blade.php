<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/modificar.css">
    <title>Modificar Me Gusta</title>
</head>

<body>
    @include("base.header")

    <h3>Modificar un like</h3>

    <form class="formulario" action="/modificarLike" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $megusta -> id }}">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="{{ megusta -> post_id }}"> <br>
        <label for="descripcion">Descripcion: </label><input type="text" name="descripcion" value="{{ megusta -> $comentario_id }}"> <br><br>
        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crear.css">

    <title>Crear Comentario</title>
</head>
<body>
@include("base.header")

<h3>Crear un Comentario</h3>

<div class="formulario">
<form action="/crearComentario" method="post">
        @csrf
        <label for="usuario_id">id Usuario: </label>
        <input type="text" name="usuario_id"> <br>

        <label for="contenido">Contenido: </label>
        <input type="text" name="contenido"> <br>

        <label for="post_id">Post:</label>
         <input type="text" name="post_id"> <br><br>
        <input type="submit" value="Enviar" class="enviar">
    </form>
</div>
</body>
</html>
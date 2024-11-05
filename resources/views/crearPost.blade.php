<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crear.css">
    <title>Crear Post</title>
</head>

<body>
    @include("base.header")

    <h3>Crear un post</h3>
    <div class="formulario">
    <form action="/crearPost" method="post">
        @csrf
        <label for="usuario">id Usuario: </label>
        <input type="text" name="usuario"> <br>

        <label for="contenido">Contenido: </label>
        <input type="text" name="contenido"> <br><br>
        <input type="submit" value="Enviar" class="enviar">
    </form>
    </div>
    
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crear.css">
    <title>Crear Evento</title>
</head>

<body>

    @include("base.header")

    <h3>Crear un Comentario</h3>

    <form class="formulario" action="/crearEvento" method="post">
        @csrf

        <label for="usuario_id">Id Usuario:</label>
        <input type="text" name="usuario_id" id="usuario_id"> <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> <br>


        <label for="detalles">Detalles:</label>
        <input type="text" name="detalles" id="detalles"> <br>

        <label for="ubicacion">Ubicacion:</label>
        <input type="text" name="ubicacion" id="ubicacion"> <br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha"> <br>

        <input type="submit" value="Enviar" class="enviar">
    </form>
</body>

</html>
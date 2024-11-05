<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crear.css">
    <title>Crear Grupo</title>
</head>
<body>
@include("base.header")

<h3>Crear un grupo</h3>


<form class="formulario" action="/crearGrupo" method="post">
    @csrf
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre"> <br>
    <label for="descripcion">Descripcion: </label>
    <input type="text" name="descripcion"> <br><br>
    <input type="submit" value="Enviar" class="enviar">
</form>
</body>
</html>
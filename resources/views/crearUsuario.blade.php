<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crear.css">
    <title>Crear Usuario</title>
</head>
<body>
    
</body>
</html>@include("base.header")

    <h3>Crear un usuario</h3>

    <form class="formulario" action="/crearUsuario" method="post">
        @csrf
        <label for="nombre">Nombre Usuario: </label>
        <input type="text" name="nombre"> <br>
        <label for="correo">Correo: </label>
        <input type="text" name="correo"> <br><br>
        <label for="contrasenia">Contraseña: </label>
        <input type="text" name="contrasenia"> <br><br>
        <input type="submit" value="Enviar" class="enviar">
    </form>
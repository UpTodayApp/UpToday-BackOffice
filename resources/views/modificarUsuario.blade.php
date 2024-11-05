<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/modificar.css">
    <title>Modificar Usuario</title>
</head>

<body>
    @include("base.header")

    <h3>Modificar un usuario</h3>

    <form class="formulario" action="/modificarUsuario" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $usuario -> id }}">
        <label for="nombre">Nombre Usuario: </label>
        <input type="text" name="nombre" value="{{ $usuario -> nombre }}"> <br>
        <label for="correo">Correo: </label>
        <input type="text" name="correo" value="{{ $usuario -> correo }}"> <br><br>
        <label for="contrasenia">Contraseña: </label>
        <input type="text" name="contrasenia" value="{{ $usuario -> contrasenia }}"> <br><br>
        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html>
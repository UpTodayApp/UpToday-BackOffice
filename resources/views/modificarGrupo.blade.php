<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/modificar.css">
    <title>Modificar Grupo</title>
</head>

<body>
    @include("base.header")

    <h3>Modificar un grupo</h3>

    <form class="formulario" action="/modificarGrupo" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $grupo -> id }}">
        <label for="nombre">Nombre: </label><input type="text" name="nombre" value="{{ $grupo -> nombre }}"> <br>
        <label for="descripcion">Descripcion: </label><input type="text" name="descripcion" value="{{ $grupo -> descripcion }}"> <br><br>
        <input class="enviar" type="submit" value="Enviar">
    </form>
</body>

</html>
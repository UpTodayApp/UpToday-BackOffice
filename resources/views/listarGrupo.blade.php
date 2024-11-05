<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Listar Grupos</title>
</head>
<body>
@include("base.header")
<h2>Grupos registrados </h2>

<a class="crear" href="/crearGrupo">Crear</a>
<div class="listado">
<table>
    <thead>
        <th>
            Nombre
        </th>
        <th>
            Descripcion
        </th>
        <th>
            Fecha de alta
        </th>
    </thead>
    @foreach ($grupo as $p)
    <tr>
        <td>
            {{ $p->nombre }}
        </td>
        <td>
            {{ $p->descripcion }}
        </td>
        <td>
            {{ $p->created_at }}
        </td>

        <td>
            <a class="eliminar" href="/eliminarGrupo/{{ $p->id }}">Eliminar</a>
            <a class="modificar" href="/modificarGrupo/{{ $p->id }}">Modificar</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</body>
</html>
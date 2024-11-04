<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    
@include("base.header")

<h2>Likes registrados </h2>


<a class="crear" href="/crearMegustaPost">Crear me gusta post</a>
<a class="crear" href="/crearMegustaComentario">Crear me gusta comentario</a>
<div class="listado">
<table>
    <thead>
        <th>
            Usuario
        </th>
        <th>
            Post
        </th>
        <th>
            Comentario
        </th>
        <th>
            Fecha de alta
        </th>
    </thead>
    @foreach ($megusta as $p)
    <tr>
        <td>
            {{ $p->usuario_id }}
        </td>
        <td>
            {{ $p->post_id }}
        </td>
        <td>
            {{ $p->comentario_id }}
        </td>
        <td>
            {{ $p->created_at }}
        </td>

        <td>
            <a class="cerrarsesion" href="/eliminarLike/{{ $p->id }}">Eliminar</a>
            <a class="modificar" href="/modificarLike/{{ $p->id }}">Modificar</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</body>
</html>

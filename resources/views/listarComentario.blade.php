<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Comentarios</title>
</head>

<body>
    @include("base.header")
    <h2>Comentarios registrados </h2>

    <a href="/crearComentario" class="crear">Crear</a>
    <div class="listado">
        <table>
            <thead>
                <th>
                    Usuario
                </th>
                <th>
                    Contenido
                </th>
                <th>
                    Post
                </th>
                <th>
                    Fecha de alta
                </th>
            </thead>
            @foreach ($comentario as $p)
            <tr>
                <td>
                    {{ $p->usuario_id }}
                </td>
                <td>
                    {{ $p->contenido }}
                </td>
                <td>
                    {{ $p->post_id}}
                </td>
                <td>
                    {{ $p->created_at }}
                </td>

                <td>
                    <a class="eliminar" href="/eliminarComentario/{{ $p->id }}">Eliminar</a>
                    <a class="modificar" href="/modificarComentario/{{ $p->id }}">Modificar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
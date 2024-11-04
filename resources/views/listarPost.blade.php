<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Inicio</title>
</head>

<body>

    @include("base.header")

    <h2>Post registrados </h2>

    <a class="crear" href="/crearPost">Crear</a>

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
                    Fecha de alta
                </th>
            </thead>
            @foreach ($post as $p)
            <tr>
                <td>
                    {{ $p->usuario_id }}
                </td>
                <td>
                    {{ $p->contenido }}
                </td>
                <td>
                    {{ $p->created_at }}
                </td>

                <td>
                    <a class="eliminar" href="/eliminarPost/{{ $p->id }}">Eliminar</a>
                    <a class="modificar" href="/modificarPost/{{ $p->id }}">Modificar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
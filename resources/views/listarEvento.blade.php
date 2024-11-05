<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Listar Eventos</title>
</head>

<body>
    @include("base.header")

    <h2>Eventos registrados </h2>

    <a class="crear" href="/crearEvento">Crear</a>
    <div class="listado">
        <table>
            <thead>
                <th>
                    Usuario
                </th>
                <th>
                    Detalles
                </th>
                <th>
                    Ubicacion
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Publicacion
                </th>
            </thead>
            @foreach ($evento as $p)
            <tr>
                <td>
                    {{ $p->usuario_id }}
                </td>
                <td>
                    {{ $p->detalles }}
                </td>
                <td>
                    {{ $p->ubicacion }}
                </td>
                <td>
                    {{ $p->fecha }}
                </td>
                <td>
                    {{ $p->created_at }}
                </td>

                <td>
                    <a class="eliminar" href="/eliminarEvento/{{ $p->id }}">Eliminar</a>
                    <a class="modificar" href="/modificarEvento/{{ $p->id }}">Modificar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
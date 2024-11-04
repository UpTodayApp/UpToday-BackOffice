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

    <h2>Usuarios registrados </h2>

    <a class="crear" href="/crearUsuario">Crear</a>
    <div class="listado">
        <table>
            <thead>
                <th>
                    Usuario
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Correo
                </th>
                <th>
                    Contraseña
                </th>
            </thead>
            @foreach ($usuario as $p)
            <tr>
                <td>
                    {{ $p->id }}
                </td>
                <td>
                    {{ $p->nombre }}
                </td>
                <td>
                    {{ $p->correo }}
                </td>
                <td>
                    {{ $p->contrasenia }}
                </td>

                <td>
                    <a class="eliminar" href="/eliminarUsuario/{{ $p->id }}">Eliminar</a>
                    <a class="modificar" href="/modificarUsuario/{{ $p->id }}">Modificar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
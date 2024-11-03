@include("base.header")

<h2>Usuarios registrados </h2>

<a href="/crearUsuario">Crear</a>

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
            <a href="/eliminarUsuario/{{ $p->id }}">Eliminar</a>
            <a href="/modificarUsuario/{{ $p->id }}">Modificar</a>
        </td>
    </tr>
    @endforeach
</table>
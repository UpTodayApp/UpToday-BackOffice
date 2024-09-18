@include("base.header")


<h2>Usuarios registrados </h2>
<table>
    <thead>
        <th>
            Usuario
        </th>
        <th>
            NombreUsuario
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
            {{ $p->NombreUsuario }}
        </td>
        <td>
            {{ $p->Correo }}
        </td>
        <td>
            {{ $p->Contraseña }}
        </td>

        <td>
            <a href="/eliminarUsuario/{{ $p->id }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>
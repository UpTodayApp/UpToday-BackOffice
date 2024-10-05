@include("base.header")


<h2>Grupos registrados </h2>

<a href="/crearGrupo">Crear</a>

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
            <a href="/eliminarGrupo/{{ $p->id }}">Eliminar</a>
            <a href="/modificarGrupo/{{ $p->id }}">Modificar</a>
        </td>
    </tr>
    @endforeach
</table>
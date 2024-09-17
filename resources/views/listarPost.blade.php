@include("base.header")

<h2>Post registrados </h2>
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
            <a href="/eliminarPost/{{ $p->id }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>
@include("base.header")


<h2>Comentarios registrados </h2>
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
    @foreach ($comentario as $p)
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
            <a href="/eliminarComentario/{{ $p->id }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>
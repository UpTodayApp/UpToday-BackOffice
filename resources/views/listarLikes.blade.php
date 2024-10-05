@include("base.header")


<h2>Likes registrados </h2>
<a href="/crearMegustaPost">Crear me gusta post</a>
<a href="/crearMegustaComentario">Crear me gusta comentario</a>
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
            <a href="/eliminarLike/{{ $p->id }}">Eliminar</a>
            <a href="/modificarLike/{{ $p->id }}">Modificar</a>
        </td>
    </tr>
    @endforeach
</table>
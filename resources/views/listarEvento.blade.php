
@include("base.header")

<h2>Eventos registrados </h2>

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
            <a href="/eliminarEvento/{{ $p->id }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>
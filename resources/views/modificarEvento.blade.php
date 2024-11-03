@include("base.header")

    <h3>Modificar un evento</h3>


    <form action="/modificarEvento" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $evento -> id }}">
        Id Usuario: <input type="text" name="usuario_id" value="{{ $evento -> usuario_id }}"> <br>
        Detalles: <input type="text" name="detalles" value="{{ $evento -> detalles }}"> <br>
        Participan: <input type="text" name="participan" value="{{ $evento -> participan }}"> <br>
        Ubicacion: <input type="text" name="ubicacion" value="{{ $evento -> ubicacion }}"> <br>
        Fecha: <input type="date" name="fecha" value="{{ $evento -> fecha }}"> <br>

        <input type="submit" value="Enviar">
    </form>
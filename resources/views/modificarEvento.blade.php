@include("base.header")

    <h3>Modificar un Comentario</h3>


    <form action="/modificarEvento" method="post">
        @csrf
        
        Id Usuario: <input type="text" name="usuario_id"> <br>
        Detalles: <input type="text" name="detalles"> <br>
        Ubicacion: <input type="text" name="ubicacion"> <br>
        Fecha: <input type="date" name="fecha"> <br>

        <input type="submit" value="Enviar">
    </form>
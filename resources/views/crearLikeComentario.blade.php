@include("base.header")

    <h3>Crear un me gusta comentario</h3>


    <form action="/crearLikeComentario" method="post">
        @csrf
        Id Usuario: <input type="text" name="usuario_id"> <br>
        Id Comentario: <input type="text" name="comentario_id"> <br><br>
        <input type="submit" value="Enviar">
    </form>
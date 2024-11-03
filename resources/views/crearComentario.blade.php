@include("base.header")

    <h3>Crear un Comentario</h3>


    <form action="/crearComentario" method="post">
        @csrf
        Id Usuario: <input type="text" name="usuario_id"> <br>
        Contenido: <input type="text" name="contenido"> <br>
        Post: <input type="text" name="post_id"> <br><br>
        <input type="submit" value="Enviar">
    </form>
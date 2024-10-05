@include("base.header")

    <h3>Modificar un Comentario</h3>


    <form action="/modificarComentario" method="post">
        @csrf

        usuario: <input type="text" name="usuario_id" value="{{ $comentario -> usuario_id }}"> <br>
        contenido: <input type="text" name="contenido" value="{{ $comentario -> contenido }}"> <br><br>
        post: <input type="text" name="post_id" value="{{ $comentario -> post_id }}"> <br><br>
        
        <input type="submit" value="Enviar">
    </form>
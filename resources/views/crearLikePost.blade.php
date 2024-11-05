@include("base.header")

    <h3>Crear un me gusta en post</h3>


    <form action="/crearLikePost" method="post">
        @csrf
        Id Usuario: <input type="text" name="usuario_id"> <br>
        Id Post: <input type="text" name="post_id"> <br><br>
        <input type="submit" value="Enviar">
    </form>
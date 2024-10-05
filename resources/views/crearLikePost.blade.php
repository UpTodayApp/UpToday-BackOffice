@include("base.header")

    <h3>Crear un me gusta post</h3>


    <form action="/crearMegustaPost" method="post">
        @csrf
        Id Usuario: <input type="text" name="usuario_id"> <br>
        Id Post: <input type="text" name="post_id"> <br><br>
        <input type="submit" value="Enviar">
    </form>
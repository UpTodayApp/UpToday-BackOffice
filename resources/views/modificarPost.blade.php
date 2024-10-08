@include("base.header")

    <h3>Modificar un post</h3>


    <form action="/modificarPost" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $post -> id }}">
        usuario: <input type="text" name="usuario_id" value="{{ $post -> usuario_id }}"> <br>
        contenido: <input type="text" name="contenido" value="{{ $post -> contenido }}"> <br><br>
        <input type="submit" value="Enviar">
    </form>
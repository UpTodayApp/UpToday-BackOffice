@include("base.header")

    <h3>Modificar un like</h3>


    <form action="/modificarLike" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $megusta -> id }}">
        Nombre: <input type="text" name="nombre" value="{{ megusta -> post_id }}"> <br>
        Descripcion: <input type="text" name="descripcion" value="{{ megusta -> $comentario_id }}"> <br><br>
        <input type="submit" value="Enviar">
    </form>
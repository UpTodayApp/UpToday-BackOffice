@include("base.header")

    <h3>Modificar un grupo</h3>


    <form action="/modificarGrupo" method="post">
        @csrf
        Nombre: <input type="text" name="nombre"> <br>
        Descripcion: <input type="text" name="descripcion"> <br><br>
        <input type="submit" value="Enviar">
    </form>
@include("base.header")

    <h3>Crear un grupo</h3>


    <form action="/crearGrupo" method="post">
        @csrf
        Nombre: <input type="text" name="nombre"> <br>
        Descripcion: <input type="text" name="descripcion"> <br><br>
        <input type="submit" value="Enviar">
    </form>
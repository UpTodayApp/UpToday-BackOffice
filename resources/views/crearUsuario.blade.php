@include("base.header")

    <h3>Crear un usuario</h3>


    <form action="/crearUsuario" method="post">
        @csrf
        Nombre Usuario: <input type="text" name="NombreUsuario"> <br>
        Correo: <input type="text" name="Correo"> <br><br>
        Contraseña: <input type="text" name="Contraseña"> <br><br>
        <input type="submit" value="Enviar">
    </form>
@include("base.header")

    <h3>Crear un usuario</h3>


    <form action="/crearUsuario" method="post">
        @csrf
        Nombre Usuario: <input type="text" name="nombre"> <br>
        Correo: <input type="text" name="correo"> <br><br>
        Contraseña: <input type="text" name="contrasenia"> <br><br>
        <input type="submit" value="Enviar">
    </form>
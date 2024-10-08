@include("base.header")

    <h3>Modificar un usuario</h3>


    <form action="/modificarUsuario" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $usuario -> id }}">
        Nombre Usuario: <input type="text" name="nombre" value="{{ $usuario -> nombre }}"> <br>
        Correo: <input type="text" name="correo" value="{{ $usuario -> correo }}"> <br><br>
        Contraseña: <input type="text" name="contrasenia" value="{{ $usuario -> contrasenia }}"> <br><br>
        <input type="submit" value="Enviar">
    </form>
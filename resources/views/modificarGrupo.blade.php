@include("base.header")

    <h3>Modificar un grupo</h3>


    <form action="/modificarGrupo" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $grupo -> id }}">
        Nombre: <input type="text" name="nombre" value="{{ $grupo -> nombre }}"> <br>
        Descripcion: <input type="text" name="descripcion" value="{{ $grupo -> descripcion }}"> <br><br>
        <input type="submit" value="Enviar">
    </form>
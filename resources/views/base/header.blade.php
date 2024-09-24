<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/header.css">
</head>

<body>
    <div class="bienvenida">
        <h1>Backofice 100% profesional no improvisado en un dia</h1>
        @if( Auth::check())
        Bienvenido {{ Auth::user() -> name }}. <a href="/logout" class="cerrar_sesion">Cerrar sesion</a>
        @else
        <a href="/login">Iniciar sesion </a><br><br>
        @endif
    </div>

    <div class="menu">
        <br><br>
        <ul>
            <li><a href="/listarPost" class="btnmenu">Post</a></li>
            <li><a href="/listarComentario" class="btnmenu">Comentario</a></li>
            <li><a href="/listarLike" class="btnmenu">Like</a></li>
            <li><a href="/listarEvento" class="btnmenu">Evento</a></li>
            <li><a href="/listarUsuario" class="btnmenu">Usuario</a></li>
            <li><a href="/listarGrupo" class="btnmenu">Grupo</a></li>
        </ul>
        <br><br>
    </div>
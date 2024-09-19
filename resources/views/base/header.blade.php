<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body>

    <h1>Backofice 100% profesional no improvisado en un dia</h1>
    @if( Auth::check())
    Bienvenido {{ Auth::user() -> name }}. <a href="/logout">Cerrar sesion</a>
    @else
    <a href="/login">Iniciar sesion </a><br><br>
    @endif
    <br>
    <br>
    <a href="/listarPost">Post</a> - <a href="/listarComentario">Comentario</a> - <a href="/listarLike">Like</a> - <a href="/listarEvento">Evento</a> - <a href="/listarUsuario">Usuario</a> - <a href="/listarGrupo">Grupo</a> <br><br>
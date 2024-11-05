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
        <div class="header">
            <img src="/img/logo-upToday.png" alt="">

            @if( Auth::check())
            <h2>Bienvenido {{ Auth::user() -> name }}.</h2>
            <a class="cerrar_sesion" href="/logout"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg></a>
            @else
            <a href="/login">Iniciar sesion </a><br><br>
            @endif
        </div>
        <div class="menu">
            <ul>
                <li><a href="/listarPost" class="btnmenu">Post</a></li>
                <li><a href="/listarComentario" class="btnmenu">Comentario</a></li>
                <li><a href="/listarLike" class="btnmenu">Like</a></li>
                <li><a href="/listarEvento" class="btnmenu">Evento</a></li>
                <li><a href="/listarUsuario" class="btnmenu">Usuario</a></li>
                <li><a href="/listarGrupo" class="btnmenu">Grupo</a></li>
            </ul>
        </div>
    </div>
</body>

</html>
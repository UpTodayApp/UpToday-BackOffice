<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/img/icono-logoUptoday.png">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Backoffice UpToday</title>
</head>

<body>

    <div class="login">

        <div class="imagen_login">
            <img src="/img/logo-uptoday.png" alt="Imagen de UpToday">
        </div>

        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="email" class="input_login" placeholder="Email"> <br>
            <input type="password" name="password" class="input_login" placeholder="Contraseña"> <br>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
    <br>
    <div class="mensaje_invalido">
        @if(session("failed"))
        <b>Credenciales inválidas</b> <br>
        @endif
    </div>

    <script>
        const mensajeError = document.querySelector('.mensaje_invalido');
        if (mensajeError) {
            mensajeError.style.display = 'block';

            setTimeout(() => {
                mensajeError.style.display = 'none';
            }, 3000);
        }
    </script>
</body>

</html>
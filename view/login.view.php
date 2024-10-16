<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Login</title>
    </head>
    <body class="login">
        <div class="formularioLogin">
            <form action="/iniciarSession" method="POST">
                <?php if($_SESSION['logueado'] == 'Incorrecto'){
                    echo "Usuario o contraseña incorrectos";
                }?>
                <h1>Login</h1>
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" value="Iniciar session">
                <a href="/lost-password">¿Contraseña perdida?</a>
            </form>
        </div>
    </body>
</html>
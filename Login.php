<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="formulario">
            <h1>Iniciar Sesion</h1>
            <form method="POST" action="">
                <?php
                    include 'conexion_bd.php';
                    include 'iniciar_sesion.php';
                ?>
                <div class="username">
                    <input type="text" required name="usuario">
                    <label>Usuario</label>
                </div>
                <div class="username">
                    <input type="password" required name="contrasena">
                    <label >Contraseña</label>
                </div>
                <input name="btningresar" class="btn" type="submit" value="Iniciar Sesion">
                <div class="registrarse">   
                    ¿No tienes cuenta? <a href="Registro.php">Registrarse</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
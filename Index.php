<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <section>
        <div class="formulario">
            <h1>Iniciar Sesion</h1>
            <form method="POST" action="" autocomplete="off">
                <?php
                    include 'conexion_bd.php';
                    include 'iniciar_sesion.php';
                ?>
                <div class="usuario">
                    <input type="text" required name="usuario">
                    <label><i class="bi bi-person-fill"></i> Usuario</label>
                </div>
                <div class="usuario">
                    <input type="password" required name="clave">
                    <label><i class="bi bi-lock-fill"></i> Contraseña</label>
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
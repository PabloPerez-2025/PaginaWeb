<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <section>
        <div class="formulario">
            <h1>Registrarse</h1>
            <form action="registro_usuario.php" method="POST" autocomplete="off">
                <div class="usuario">
                    <input type="text" required name="nombre_completo">
                    <label><i class="bi bi-person-circle"></i> Nombre Completo</label>
                </div>
                <div class="usuario">
                    <input type="text" required name="correo">
                    <label><i class="bi bi-envelope-fill"></i> Correo Electronico</label>
                </div>
                <div class="usuario">
                    <input type="text" required name="usuario">
                    <label><i class="bi bi-person-fill"></i> Usuario</label>
                </div>
                <div class="usuario">
                    <input type="password" required name="clave">
                    <label><i class="bi bi-lock-fill"></i> Contraseña</label>
                </div>
                <button class="btn-registrarse">Registrarse</button>
            </form>
        </div>
    </section>
</body>
</html>
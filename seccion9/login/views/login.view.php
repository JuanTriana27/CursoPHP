<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fuente raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Estilos -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesión</h1>
        <hr class="borde" style="margin-bottom: 1rem;">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formulario" name="login">

            <!-- Usuario -->
            <div class="form-group">
                <i class="icono izquiera fa fa-user"></i>
                <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>

            <!-- Contraseña -->
            <div class="form-group">
                <i class="icono izquiera fa fa-lock"></i>
                <input type="password" name="password" class="password" placeholder="Contraseña">
                <i class="submit-bnt fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if (!empty($errores)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php elseif (!empty($success)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>
        </form>

        <p class="texto-registrate">
            ¿No Tienes Cuenta?
            <a href="registro.php">Registrate</a>
        </p>
    </div>
</body>

</html>
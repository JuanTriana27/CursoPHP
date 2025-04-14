<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wraw">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">

            <input type="text" name="correo" id="correo" placeholder="Correo" value="<?php if (!$enviado && isset($correo)) echo $correo ?>">

            <textarea type="text" name="mensaje" id="mensaje" placeholder="Mensaje"><?php if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p>Enviado Corrrectamente</p>
                </div>
            <?php endif ?>

            <input type="submit" value="Enviar Correo" class="btn btn-primary" name="submit" id="submit">

            <!-- Mensajes de error -->
            <!-- <div class="alert error">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus consequatur quae expedita autem soluta, fuga nobis esse. Rem laudantium, aspernatur corporis quaerat aut, assumenda quae nihil dignissimos inventore sint veniam.
            </div> -->

            <!-- Mensajes de exito -->
            <!-- <div class="alert success">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.
            </div> -->
        </form>
    </div>

</body>

</html>
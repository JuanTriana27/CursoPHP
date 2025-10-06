<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona una foto:</label>
            <input type="file" name="foto" id="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" name="titulo" id="titulo">

            <label for="texto">Descripción de la foto</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <!-- Mostrar error -->
            <?php if (!empty($error)): ?>
                <div class="error">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <button type="submit">
                <i class="fa fa-upload"></i> Subir Foto
            </button>

            <a href="index.php" class="regresar"><i class="fa fa-arrow-left"></i>Volver</a>

        </form>
    </div>

    <footer>
        <p class="copyright">Galería de Imágenes &copy; 2023</p>
    </footer>
</body>

</html>
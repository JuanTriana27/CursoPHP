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
            <h1 class="titulo">
                <?php if (!empty($foto)) {
                    echo $foto['titulo'];
                } else {
                    echo $foto['imagen'];
                } ?></h1>
        </div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <?php if (!empty($foto)): ?>
                <img src="images/<?php echo htmlspecialchars($foto['imagen']); ?>" alt="<?php echo htmlspecialchars($foto['titulo']); ?>">
            <?php endif; ?>
            <p class="texto"><?php echo htmlspecialchars($foto['texto']); ?></p>
            <a href="index.php" class="regresar"><i class="fa fa-arrow-left"></i> Ver más</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galería de Imágenes &copy; 2023</p>
    </footer>
</body>

</html>
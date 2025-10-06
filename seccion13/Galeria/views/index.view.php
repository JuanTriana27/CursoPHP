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
            <h1 class="titulo">Galeria de Imagenes</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
           <?php
           foreach ($fotos as $foto) { ?>
               <div class="thumb">
                   <a href="foto.php?id=<?php echo $foto['id_imagen']; ?>">
                       <img src="images/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                   </a>
               </div>
           <?php } ?>

        <div class="paginacion">
            <!-- <a href="#" class="izquierda"><i class="fa fa-angle-left"></i> Anterior</a>
            <a href="#" class="derecha">Siguiente <i class="fa fa-angle-right"></i></a> -->

            <?php if ($pagina_actual > 1) { ?>
                <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-angle-left"></i> Anterior</a>     
            <?php } ?>

            <?php if ($pagina_actual < $total_paginas) { ?>
                <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Siguiente <i class="fa fa-angle-right"></i></a>
            <?php } ?>
        </div>
    </section>

    <footer>
        <p class="copyright">Galería de Imágenes &copy; 2023</p>
    </footer>
</body>

</html>
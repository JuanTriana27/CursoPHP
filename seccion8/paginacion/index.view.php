<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fuente oswald -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="paginacion/assets/style.css">
    <title>Paginación</title>
</head>

<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo) : ?>
                    <li>
                        <?php echo $articulo['id_articulo'] . " - " . $articulo['articulo']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!-- Boton anterior deshabilitado -->
                <?php if ($pagina == 1) : ?>
                    <li class="disable"><a href="#">&laquo;</a></li>
                <?php else : ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Mostramos paginas con un ciclo -->
                <?php
                for ($i = 1; $i <= $numeroPaginas; $i++) {
                    if ($pagina == $i) {
                        echo "<li class='active'><a href='#'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>

                <!-- Boton siguiente deshabilitado -->
                <?php if ($pagina == $numeroPaginas) : ?>
                    <li class="disable"><a href="#">&raquo;</a></li>
                <?php else : ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>
    </div>
</body>

</html>
<?php require 'header.php'; ?>

<div class="container">
    <h2><?php echo $mensaje; ?></h2>
    <div class="posts-container">
        <?php foreach ($resultados as $articulo): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $articulo['id']; ?>"><?php echo $articulo['titulo']; ?></a></h2>
                    <p class="fecha"><?php echo fecha($articulo['fecha']); ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $articulo['id']; ?>">
                            <img src="<?php echo RUTA; ?>img/<?php echo $articulo['thumb']; ?>" alt="Imagen de la noticia">
                        </a>
                    </div>
                    <p class="extract">
                        <?php echo $articulo['extracto']; ?>
                    </p>
                    <a href="single.php?id=<?php echo $articulo['id']; ?>" class="continue">Continuar Leyendo</a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?php require 'paginacion.php'; ?>
<?php require 'footer.php'; ?>
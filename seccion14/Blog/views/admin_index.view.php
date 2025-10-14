<?php require '../views/header.php'; ?>

<style>
    .post h2.titulo {
        margin: 0;
        font-size: 1.5em;
    }

    .post a {
        margin-right: 10px;
        text-decoration: none;
        color: #3498db;
    }

    .post a:hover {
        text-decoration: underline;
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        margin-bottom: 20px;
        background-color: #e74c3c;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #8d342aff;
    }

</style>

<div class="container">
    <div class="posts-container">
        <h2>Panel de Control</h2>
        <a href="nuevo.php" class="btn"><i class="fa fa-plus"></i> Nuevo Artículo</a>
        <a href="cerrar.php" class="btn"><i class="fa fa-sign-out-alt"></i> Cerrar Sesion</a>
        <?php foreach ($post as $articulo): ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><?php echo $articulo['titulo']; ?></h2>
                    <a href="editar.php?id=<?php echo $articulo['id']; ?>">Editar</a>
                    <a href="../single.php?id=<?php echo $articulo['id']; ?>">Ver</a>
                    <a href="borrar.php?id=<?php echo $articulo['id']; ?>">Eliminar</a>
                </article>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?php require '../paginacion.php'; ?>
<?php require '../views/footer.php'; ?>
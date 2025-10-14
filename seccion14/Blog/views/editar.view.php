<?php require 'header.php'; ?>

<style>
    .formulario {
        display: flex;
        flex-direction: column;
    }

    .formulario input[type="text"],
    .formulario textarea,
    .formulario input[type="file"] {
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .formulario textarea {
        resize: vertical;
        min-height: 100px;
    }

    .formulario input[type="submit"] {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .formulario input[type="submit"]:hover {
        background-color: #73251cff;
    }
</style>

<div class="container">
    <div class="posts-container">
        <div class="post">
            <article>
                <h2 class="titulo">Editar Artículo</h2>
                <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $post['id']; ?>" name="id">
                    <input type="text" name="titulo" value="<?php echo $post['titulo']; ?>" required>
                    <input type="text" name="extracto" value="<?php echo $post['extracto']; ?>" required>
                    <textarea name="texto" required><?php echo $post['texto']; ?></textarea>
                    <input type="file" name="thumb" required>
                    <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">

                    <button type="submit" style="background-color: #e74c3c; color: #fff; border: none; padding: 10px; font-size: 16px; border-radius: 5px; cursor: pointer;">
                        <i class="fa fa-plus"></i> Modificar Artículo
                    </button>
                </form>
            </article>
        </div>
    </div>

</div>
<?php require 'footer.php'; ?>
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
                <h2 class="titulo">Nuevo Artículo</h2>
                <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                    <input type="text" name="titulo" placeholder="Titulo del Artículo" required>
                    <input type="text" name="extracto" placeholder="Extracto del Artículo" required>
                    <textarea name="texto" placeholder="Texto del Artículo" required></textarea>
                    <input type="file" name="thumb" required>
                    <button type="submit" style="background-color: #e74c3c; color: #fff; border: none; padding: 10px; font-size: 16px; border-radius: 5px; cursor: pointer;">
                        <i class="fa fa-plus"></i> Agregar Artículo
                    </button>
                </form>
            </article>
        </div>
    </div>

</div>
<?php require 'footer.php'; ?>
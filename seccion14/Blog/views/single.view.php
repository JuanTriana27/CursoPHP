<?php require 'header.php'; ?>

<style>
    /* ========== ESTILOS ESPECÍFICOS PARA PÁGINA INDIVIDUAL DE NOTICIAS ========== */

    /* Contenedor principal para single post */
    .single-post-container {
        max-width: 900px;
        margin: 30px auto;
        padding: 0 20px;
    }

    /* Post individual en página de detalle */
    .single-post {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        margin-bottom: 40px;
    }

    .single-post article {
        padding: 50px;
    }

    /* Título para single post */
    .single-titulo {
        font-family: 'Oswald', sans-serif;
        font-size: 2.8rem;
        color: #1a1a1a;
        margin-bottom: 15px;
        line-height: 1.3;
        text-align: center;
        border-bottom: 3px solid #e74c3c;
        padding-bottom: 20px;
    }

    /* Fecha para single post */
    .single-fecha {
        color: #777;
        font-size: 1.1rem;
        margin-bottom: 30px;
        font-style: italic;
        text-align: center;
        display: block;
    }

    /* Thumbnail para single post */
    .single-thumb {
        margin-bottom: 35px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    .single-thumb img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .single-thumb:hover img {
        transform: scale(1.02);
    }

    /* Texto del artículo */
    .single-texto {
        font-size: 1.15rem;
        line-height: 1.8;
        color: #444;
        text-align: justify;
        margin-bottom: 40px;
    }

    /* Estilos para mejorar la legibilidad del texto */
    .single-texto p {
        margin-bottom: 1.5em;
    }

    .single-texto h2,
    .single-texto h3,
    .single-texto h4 {
        font-family: 'Oswald', sans-serif;
        color: #1a1a1a;
        margin: 2em 0 1em 0;
        border-left: 4px solid #e74c3c;
        padding-left: 15px;
    }

    .single-texto h2 {
        font-size: 1.8rem;
    }

    .single-texto h3 {
        font-size: 1.5rem;
    }

    .single-texto h4 {
        font-size: 1.3rem;
    }

    .single-texto ul,
    .single-texto ol {
        margin: 1.5em 0;
        padding-left: 2em;
    }

    .single-texto li {
        margin-bottom: 0.5em;
    }

    .single-texto blockquote {
        border-left: 4px solid #e74c3c;
        background: #f8f9fa;
        padding: 20px;
        margin: 2em 0;
        font-style: italic;
        border-radius: 0 8px 8px 0;
    }

    .single-texto strong {
        color: #1a1a1a;
        font-weight: 700;
    }

    .single-texto em {
        color: #555;
    }

    /* Botón de volver (opcional) */
    .volver-btn {
        display: inline-flex;
        align-items: center;
        background: #1a1a1a;
        color: white;
        padding: 12px 25px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.95rem;
        margin-top: 20px;
    }

    .volver-btn:hover {
        background: #e74c3c;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
    }

    /* ========== MEDIA QUERIES PARA SINGLE POST ========== */

    /* Tablet */
    @media (max-width: 768px) {
        .single-post-container {
            margin: 20px auto;
            padding: 0 15px;
        }

        .single-post article {
            padding: 35px;
        }

        .single-titulo {
            font-size: 2.2rem;
            padding-bottom: 15px;
        }

        .single-fecha {
            font-size: 1rem;
            margin-bottom: 25px;
        }

        .single-texto {
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .single-texto h2 {
            font-size: 1.6rem;
        }

        .single-texto h3 {
            font-size: 1.4rem;
        }
    }

    /* Mobile */
    @media (max-width: 600px) {
        .single-post-container {
            margin: 15px auto;
            padding: 0 10px;
        }

        .single-post article {
            padding: 25px;
        }

        .single-titulo {
            font-size: 1.8rem;
            padding-bottom: 12px;
        }

        .single-fecha {
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .single-texto {
            font-size: 1.05rem;
            line-height: 1.6;
            text-align: left;
        }

        .single-texto h2 {
            font-size: 1.4rem;
        }

        .single-texto h3 {
            font-size: 1.3rem;
        }
    }

    /* Mobile pequeño */
    @media (max-width: 480px) {
        .single-post article {
            padding: 20px;
        }

        .single-titulo {
            font-size: 1.6rem;
        }

        .single-texto {
            font-size: 1rem;
        }
    }

    /* Pantallas grandes */
    @media (min-width: 1200px) {
        .single-post-container {
            max-width: 1000px;
        }

        .single-post article {
            padding: 60px;
        }

        .single-titulo {
            font-size: 3.2rem;
        }

        .single-texto {
            font-size: 1.2rem;
            line-height: 1.9;
        }
    }
</style>

<div class="container">
    <div class="single-post-container">
        <div class="single-post">
            <article>
                <h1 class="single-titulo"><?php echo $post['titulo']; ?></h1>
                <span class="single-fecha"><?php echo fecha($post['fecha']); ?></span>
                <div class="single-thumb">
                    <img src="<?php echo RUTA; ?>img/<?php echo $post['thumb']; ?>"
                        alt="<?php echo $post['titulo']; ?>">
                </div>
                <div class="single-texto">
                    <?php echo nl2br($post['texto']); ?>
                </div>
                <a href="javascript:history.back()" class="volver-btn">← Volver a Noticias</a>
            </article>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
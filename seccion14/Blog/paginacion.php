<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>

<style>
    /* ========== ESTILOS ESPECÍFICOS PARA PAGINACIÓN ========== */

    .paginacion-container {
        display: flex;
        justify-content: center;
        margin: 50px 0;
        padding: 0 15px;
    }

    .paginacion-list {
        display: flex;
        list-style: none;
        gap: 8px;
        margin: 0;
        padding: 0;
        align-items: center;
    }

    .paginacion-item {
        margin: 0;
    }

    /* Elementos base de paginación */
    .paginacion-link,
    .paginacion-disable,
    .paginacion-active {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 45px;
        height: 45px;
        border-radius: 8px;
        text-decoration: none;
        font-family: 'Oswald', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        padding: 0 5px;
    }

    /* Enlaces normales */
    .paginacion-link {
        background: #fff;
        color: #333;
        border: 2px solid #e0e0e0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .paginacion-link:hover {
        background: #e74c3c;
        color: white;
        border-color: #e74c3c;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(231, 76, 60, 0.3);
    }

    /* Botón deshabilitado */
    .paginacion-disable {
        background: #f8f9fa;
        color: #ccc;
        border: 2px solid #f0f0f0;
        cursor: not-allowed;
        box-shadow: none;
    }

    /* Botón activo - ESTILOS PRINCIPALES */
    .paginacion-item.active .paginacion-active {
        background: #e74c3c;
        color: white;
        border: 2px solid #e74c3c;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
        cursor: default;
        font-weight: 700;
    }

    /* Flechas de navegación */
    .paginacion-prev,
    .paginacion-next {
        font-weight: 700;
        min-width: 50px;
    }

    .paginacion-prev:hover,
    .paginacion-next:hover {
        background: #1a1a1a;
        border-color: #1a1a1a;
    }

    /* Estado hover para el item activo (ligera mejora visual) */
    .paginacion-item.active:hover .paginacion-active {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(231, 76, 60, 0.5);
    }

    /* ========== MEDIA QUERIES PARA PAGINACIÓN ========== */

    /* Tablet */
    @media (max-width: 768px) {
        .paginacion-container {
            margin: 40px 0;
        }

        .paginacion-list {
            gap: 6px;
        }

        .paginacion-link,
        .paginacion-disable,
        .paginacion-active {
            min-width: 40px;
            height: 40px;
            font-size: 1rem;
            border-radius: 6px;
        }

        .paginacion-prev,
        .paginacion-next {
            min-width: 45px;
        }
    }

    /* Mobile */
    @media (max-width: 600px) {
        .paginacion-container {
            margin: 30px 0;
            padding: 0 10px;
        }

        .paginacion-list {
            gap: 4px;
        }

        .paginacion-link,
        .paginacion-disable,
        .paginacion-active {
            min-width: 38px;
            height: 38px;
            font-size: 0.95rem;
            border-radius: 5px;
        }

        .paginacion-prev,
        .paginacion-next {
            min-width: 42px;
        }
    }

    /* Mobile pequeño */
    @media (max-width: 480px) {
        .paginacion-list {
            gap: 3px;
        }

        .paginacion-link,
        .paginacion-disable,
        .paginacion-active {
            min-width: 35px;
            height: 35px;
            font-size: 0.9rem;
            border-radius: 4px;
        }

        .paginacion-prev,
        .paginacion-next {
            min-width: 38px;
        }
    }

    /* Pantallas grandes */
    @media (min-width: 1200px) {
        .paginacion-container {
            margin: 60px 0;
        }

        .paginacion-link,
        .paginacion-disable,
        .paginacion-active {
            min-width: 48px;
            height: 48px;
            font-size: 1.15rem;
        }

        .paginacion-prev,
        .paginacion-next {
            min-width: 55px;
        }
    }
</style>

<section class="paginacion-container">
    <ul class="paginacion-list">
        <!-- Bloquear boton de retroceso -->
        <?php if (pagina_actual() === 1): ?>
            <li class="paginacion-item">
                <span class="paginacion-disable paginacion-prev">&laquo;</span>
            </li>
        <?php else: ?>
            <li class="paginacion-item">
                <a href="index.php?p=<?php echo pagina_actual() - 1; ?>" class="paginacion-link paginacion-prev">&laquo;</a>
            </li>
        <?php endif; ?>

        <!-- Numeracion de paginas -->
        <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
            <?php if (pagina_actual() === $i): ?>
                <li class="paginacion-item active">
                    <span class="paginacion-active"><?php echo $i; ?></span>
                </li>
            <?php else: ?>
                <li class="paginacion-item">
                    <a href="index.php?p=<?php echo $i; ?>" class="paginacion-link"><?php echo $i; ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>

        <!-- Bloquear boton de avance -->
        <?php if (pagina_actual() === $numero_paginas): ?>
            <li class="paginacion-item">
                <span class="paginacion-disable paginacion-next">&raquo;</span>
            </li>
        <?php else: ?>
            <li class="paginacion-item">
                <a href="index.php?p=<?php echo pagina_actual() + 1; ?>" class="paginacion-link paginacion-next">&raquo;</a>
            </li>
        <?php endif; ?>
    </ul>
</section>
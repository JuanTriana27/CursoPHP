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
            <div class="thumb">
                <a href="#">
                    <img src="images/1.png" alt="">
                </a>
            </div>

            <div class="thumb">
                <a href="#">
                    <img src="images/2.png" alt="">
                </a>
            </div>

            <div class="thumb">
                <a href="#">
                    <img src="images/3.png" alt="">
                </a>
            </div>

            <div class="thumb">
                <a href="#">
                    <img src="images/4.png" alt="">
                </a>
            </div>
        </div>

        <div class="paginacion">
            <a href="#" class="izquierda"><i class="fa fa-angle-left"></i> Anterior</a>
            <a href="#" class="derecha">Siguiente <i class="fa fa-angle-right"></i></a>
        </div>
    </section>

    <footer>
        <p class="copyright">Galería de Imágenes &copy; 2023</p>
    </footer>
</body>

</html>
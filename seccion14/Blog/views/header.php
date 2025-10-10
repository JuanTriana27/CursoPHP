<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Oswald:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/styles.css">
    <title>Fuck News</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA; ?>">Fuck News</a></p>
            </div>

            <div class="derecha">
                <form name="busqueda" class="search" action="<?php echo RUTA; ?>buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>
<?php

// Funcion para contar usuarios
function contar_usuarios()
{

    // Nombre del archivo donde se guarda el contador
    $archivo = 'contador.txt';

    // Verificar si el archivo existe
    if (file_exists($archivo)) {
        $cuenta = file_get_contents($archivo) + 1;
        file_put_contents($archivo, $cuenta);

        // Devolver el contador actualizado
        return $cuenta;
    } else {
        file_put_contents($archivo, 1);
        return 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>Contador de Visitas</h1>
    <div class="Visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="texto">Visitantes totales</p>
    </div>
</body>

</html>
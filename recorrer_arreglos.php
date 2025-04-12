<?php

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Meses del Año</h1>
    <ul>
        <!-- Mostrar datos del arreglo -->
        <?php
        foreach ($meses as $mes) {
            echo '<li>' . $mes . "<br>";
        }
        ?>
    </ul>
</body>

</html>
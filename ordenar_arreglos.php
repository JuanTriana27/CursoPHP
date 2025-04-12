<?php

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

// orden en forma alfabetica
sort($meses);

// orden en forma alfabetica inversa
// rsort($meses);

// numeros en desorden
$numeros = array(5, 2, 8, 1, 4);

// orden en forma numerica
sort($numeros);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Numeros</h1>
    <ul>
        <!-- Mostrar datos del arreglo -->
        <?php
        foreach ($numeros as $num) {
            echo '<li>' . $num . "<br>";
        }
        ?>
    </ul>
</body>

</html>
<?php

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

$juan = array(
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Madrid"
);


echo "=====================<br>";
echo "Recorriendo el arreglo con forEach<br>";
echo "=====================<br>";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MESES</h1>
    <ul>

        <?php

        // Recorrer con forEach
        foreach ($meses as $mes) {
            echo "<li>El mes es: $mes <br></li>";
        }

        echo "<br>=====================<br>";
        echo "Recorriendo el arreglo asociativo con forEach<br>";
        echo "=====================<br>";

        // Recorrer con arreglo asiciativo
        foreach ($juan as $data =>$valor){
            echo "<br><li>El $data es: $valor <br></li>";
        }
        ?>

    </ul>
</body>

</html>
<?php

$paises = array("Colombia", "Perú", "Chile", "Argentina", "España","Venezuela", "Ecuador", "Paraguay", "Uruguay", "Bolivia", "Brasil");

// Sentencia Break
foreach ($paises as $pais) {
    if ($pais == "Argentina") {
        echo "Se encontró Argentina, se detiene el ciclo.<br>";
        break; // Detiene el ciclo al encontrar "Argentina"
    }
    echo "El país es: $pais <br>";
}

?>

<!-- Sentencia Continue -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Paises de Latinoamerica</h1>
    <?php

    foreach($paises as $pais) {
        if($pais == "España"){
            echo "Se encontró España, se salta al siguiente país.<br>";
            continue; // Salta a la siguiente iteración al encontrar "España"
        } else {
            echo "El país es: $pais <br>";
        }
        
    }
    ?>
</body>

</html>
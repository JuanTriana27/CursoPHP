<?php

if(isset($_COOKIE['font-size'])){
    $tamaño = $_COOKIE['font-size'];
} else {
    $tamaño = '16px'; // Valor por defecto si no existe la cookie
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    p {
        font-size: <?php echo $tamaño; ?>;
    }
</style>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis veniam, ratione est nemo quod a commodi quaerat explicabo quibusdam atque corrupti sed aliquid natus. Error provident hic sapiente veritatis fugiat!</p>
</body>
</html>
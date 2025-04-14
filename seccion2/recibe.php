<?php

if ($_POST) {
    $nombre = $_POST['text'];
    $sexo = $_POST['sexo'];
    $año = $_POST['year'];
    $terminos = $_POST['terminos'] ?? false; // Usar null coalescing operator para evitar undefined index

    // Mostrar datos
    echo "Nombre: $nombre <br>";
    echo "Sexo: $sexo <br>";
    echo "Año de Nacimiento: $año <br>";
    echo "Acepta Terminos: " . ($terminos ? 'Sí' : 'No') . "<br>";
} else {
    header("Location: index.php");
}

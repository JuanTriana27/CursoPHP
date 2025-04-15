<?php
session_start(); // Inicia la sesión

if ($_SESSION) {
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola, $nombre</h1>";
} else {
    echo "<h1>No hay sesión activa</h1>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>

<body>
    <a href="cerrar.php">Cerrar Sesion</a>
</body>

</html>
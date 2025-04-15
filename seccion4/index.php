<?php
session_start(); // Inicia la sesión

$_SESSION['nombre'] = 'Juan'; // Almacena un valor en la sesión

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Pagina de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la pagina 2</a>
</body>
</html>
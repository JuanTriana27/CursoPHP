<?php

$errores = "";

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (empty($nombre)) {
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); // Elimina etiquetas HTML y PHP
        echo "Nombre: $nombre <br>";
    } else {
        $errores .= "Agrega un Nombre <br>";
    }

    if (empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); // Elimina etiquetas HTML y PHP
        echo "Correo: $correo <br>";

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= "El correo no es válido <br>";
        } else {
            echo "Correo válido <br>";
        }
    } else {
        $errores .= "Agrega un Correo <br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

        <input type="text" name="nombre">
        <input type="text" name="correo">

        <?php if (!empty($errores)): ?>
            <div class="error"><?php echo $errores ?></div>
        <?php endif; ?>

        <input type="submit" name="submit">

    </form>
</body>

</html>
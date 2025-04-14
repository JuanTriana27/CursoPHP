<?php

if($_POST){
    echo $_POST['text'];
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
        <input type="text" name="text" id="name" placeholder="Ingresa un nombre">
        <br>

        <input type="radio" name="sexo" value="hombre">
        <label for="hombre">Hombre</label>

        <input type="radio" name="sexo" value="mujer">
        <label for="mujer">Mujer</label>
        <br>

        <label for = "year">Año de Nacimiento</label>
        <select name="year" id="year">
            <?php
            for ($year = 1970; $year <= date("Y"); $year++) {
                echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>
        <br>

        <label for="terminos">Aceptas los Terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="true">

        <br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>
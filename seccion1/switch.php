<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br>
        <label for="op">Operación:</label>
        <select name="op" id="op">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>

<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los valores del formulario
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $op = isset($_POST['op']) ? (int)$_POST['op'] : 0;

    // Switch Case
    switch ($op) {
        case 1:
            echo "La suma es: " . ($num1 + $num2) . "<br>";
            break;
        case 2:
            echo "La resta es: " . ($num1 - $num2) . "<br>";
            break;
        case 3:
            echo "La multiplicación es: " . ($num1 * $num2) . "<br>";
            break;
        case 4:
            if ($num2 != 0) {
                echo "La división es: " . ($num1 / $num2) . "<br>";
            } else {
                echo "Error: No se puede dividir entre cero.<br>";
            }
            break;
        default:
            echo "Opción no válida <br>";
            break;
    }
}
?>
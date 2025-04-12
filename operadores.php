<?php

echo "======================== <br>";
echo "Operadores Aritmeticos <br>";
echo "======================== <br>";

// Aritemticos
// Sumar +
// Restar -
// Multiplicar *
// Dividir /
// Potencia **
// Modulo %

$num1 = 10;
$num2 = 5;

$resultado = $num1 + $num2; // Sumar
echo "La suma es: " . $resultado . "<br>";

$resultado = $num1 - $num2; // Restar
echo "La resta es: " . $resultado . "<br>";

$resultado = $num1 * $num2; // Multiplicar
echo "La multiplicacion es: " . $resultado . "<br>";

$resultado = $num1 / $num2; // Dividir
echo "La division es: " . $resultado . "<br>";

$resultado = $num1 ** $num2; // Potencia
echo "La potencia es: " . $resultado . "<br>";

$resultado = $num1 % $num2; // Modulo
echo "El modulo es: " . $resultado . "<br>";

echo "======================== <br>";
echo "Operadores de Asignacion <br>";
echo "======================== <br>";

// Asignacion
// Asignar valor =
// Asignar valor y sumar +=
// Asignar valor y restar -=
// Asignar valor y multiplicar *=
// Asignar valor y dividir /=

$num3 = 15; // Asignar valor
echo "El valor de num3 es: " . $num3 . "<br>";

$num3 += 5; // Asignar valor y sumar
echo "El valor de num3 es: " . $num3 . "<br>";

$num3 -= 5; // Asignar valor y restar
echo "El valor de num3 es: " . $num3 . "<br>";

$num3 *= 5; // Asignar valor y multiplicar
echo "El valor de num3 es: " . $num3 . "<br>";

$num3 /= 5; // Asignar valor y dividir
echo "El valor de num3 es: " . $num3 . "<br>";

echo "======================== <br>";
echo "Operadores de Comparacion <br>";
echo "======================== <br>";

// Comparacion
// Comparar si son iguales ==
// Comparar si son iguales y del mismo tipo ===
// Comparar si son diferentes !=
// Comparar si son diferentes y del mismo tipo !==
// Comparar si es mayor que >
// Comparar si es menor que <
// Comparar si es mayor o igual que >=
// Comparar si es menor o igual que <=

$num4 = 20;
$num5 = 10;

$resultado = $num4 == $num5; // Comparar si son iguales
echo "¿Son iguales? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 === $num5; // Comparar si son iguales y del mismo tipo
echo "¿Son iguales y del mismo tipo? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 != $num5; // Comparar si son diferentes
echo "¿Son diferentes? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 !== $num5; // Comparar si son diferentes y del mismo tipo
echo "¿Son diferentes y del mismo tipo? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 > $num5; // Comparar si es mayor que
echo "¿Es num4 mayor que num5? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 < $num5; // Comparar si es menor que
echo "¿Es num4 menor que num5? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 >= $num5; // Comparar si es mayor o igual que
echo "¿Es num4 mayor o igual que num5? " . ($resultado ? "Sí" : "No") . "<br>";

$resultado = $num4 <= $num5; // Comparar si es menor o igual que
echo "¿Es num4 menor o igual que num5? " . ($resultado ? "Sí" : "No") . "<br>";

echo "======================== <br>";
echo "Operadores Logicos <br>";
echo "======================== <br>";

// Logicos
// Y and &&
// O or ||
// xor
// No !
// Comparar si son iguales ==
// Comparar si es verdadero true
// Comparar si es falso false

$valor1 = true;
$valor2 = false;

if ($valor1 && $valor2) { // Y (and)
    echo "Ambos valores son verdaderos<br>";
} else {
    echo "No ambos valores son verdaderos<br>";
}

if ($valor1 || $valor2) { // O (or)
    echo "Al menos uno de los valores es verdadero<br>";
} else {
    echo "Ninguno de los valores es verdadero<br>";
}

if ($valor1 xor $valor2) { // Exclusivo (xor)
    echo "Uno y solo uno de los valores es verdadero<br>";
} else {
    echo "Ambos valores son iguales (verdaderos o falsos)<br>";
}

if (!$valor1) { // No (!)
    echo "El valor1 es falso<br>";
} else {
    echo "El valor1 es verdadero<br>";
}

echo "======================== <br>";
echo "Operadores de Incremento / Decremento <br>";
echo "======================== <br>";

// Incremento / Decremento
// Incrementar ++$num1 o $num1++
// Decrementar --$num1 o $num1--

$num6 = 10;

echo "El valor inicial de num6 es: " . $num6 . "<br>";

$num6++; // Incrementar después
echo "Después de incrementar (post-incremento), num6 es: " . $num6 . "<br>";

++$num6; // Incrementar antes
echo "Después de incrementar (pre-incremento), num6 es: " . $num6 . "<br>";

$num6--; // Decrementar después
echo "Después de decrementar (post-decremento), num6 es: " . $num6 . "<br>";

--$num6; // Decrementar antes
echo "Después de decrementar (pre-decremento), num6 es: " . $num6 . "<br>";

echo "======================== <br>";
echo "Operadores de Cadenas <br>";
echo "======================== <br>";

// Cadenas
// Concatenar .
// Concatenar y asignar .=
// -- */

$cadena1 = "Hola";
$cadena2 = " Mundo";

$resultado = $cadena1 . $cadena2; // Concatenar
echo "La concatenación es: " . $resultado . "<br>";

$cadena1 .= $cadena2; // Concatenar y asignar
echo "La concatenación y asignación es: " . $cadena1 . "<br>";
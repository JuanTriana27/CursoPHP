<?php
// Las variables en PHP se declaran con el signo de pesos ($) seguido del nombre de la variable.
// Las variables son sensibles a mayúsculas y minúsculas, por lo que $nombre y $Nombre son diferentes variables.

// Cadena de texto
$nombre = 'Juan Triana';

// Integer: Numeros enteros
$edad = 25;

// Double: Numeros decimales
$altura = 1.75;

// Boolean: Verdadero o falso
$esEstudiante = true;

// Array: Arreglo de datos
// Objeto: Objeto de datos
// Null: Valor nulo
// Class: Clases de objetos

echo gettype($nombre); // Devuelve el tipo de dato de la variable $nombre
echo gettype($edad); // Devuelve el tipo de dato de la variable $edad
echo gettype($altura); // Devuelve el tipo de dato de la variable $altura
echo gettype($esEstudiante); // Devuelve el tipo de dato de la variable $esEstudiante

echo '<br>' . 'Hola, ' . $nombre;
?>
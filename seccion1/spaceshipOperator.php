<?php

// comparador de nave espacial
// regresa 0 si son iguales
// regresa -1 si el primero es menor que el segundo
// regresa 1 si el primero es mayor que el segundo

echo 10 <=> 1;

echo "<br>";

echo 10 <=> 10;

echo "<br>";

echo 1 <=> 10;

echo "<br>";

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo implode('_', $numeros) . "<br>";
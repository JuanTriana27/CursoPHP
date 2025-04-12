<?php

$juan = array("nombre" => "Juan", 
"edad" => 25, 
"ciudad" => "Madrid");

echo extract($juan); // Extrae las variables del array asociativo

echo '<br>' . array_pop($juan); // Elimina el último elemento del array y agrega un salto de línea

echo '<br>' . join(", ", $juan); // Une los elementos del array en una cadena separada por comas}


//sort y rsort
$numeros = array(3, 1, 4, 2, 5);
sort($numeros); // Ordena el array en orden ascendente
rsort($numeros); // Ordena el array en orden descendente
echo '<br>' . join(", ", $numeros); // Muestra el array ordenado


// reverse
$numeros2 = array(1, 2, 3, 4, 5);
$numeros2 = array_reverse($numeros2); // Invierte el orden de los elementos del array
echo '<br>' . join(", ", $numeros2); // Muestra el array invertido

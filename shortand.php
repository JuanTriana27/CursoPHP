<?php

$edad = 25;
// se pregunta por una condicion, se ejecuta si se cumple la condicion
// en este caso como se definio edad se muestra el valor de edad
// si no se cumple la condicion se ejecuta la segunda parte, en este caso se muestra 'no definida'
$edad = (isset($edad)) ? $edad : 'no definida';

echo 'Edad: ' . $edad . '<br>';
?>
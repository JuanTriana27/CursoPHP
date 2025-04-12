<?php

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

//echo count($meses); // Imprime la cantidad de datos

//ultimo dato
$ultimo_dato = count($meses) - 1; // -1 porque empieza desde 0
echo $meses[$ultimo_dato]; // Imprime el último dato


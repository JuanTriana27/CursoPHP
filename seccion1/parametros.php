<?php

function saludo($nombre){
    echo "Hola " . $nombre;
    echo "<br>";
}

$nombres = array("Juan", "Pedro", "Maria", "Ana", "Luis");

for($i=0; $i<count($nombres); $i++){
    saludo($nombres[$i]);
}



function suma($a, $b){
    return $a + $b;
}

echo suma(5, 10);
?>
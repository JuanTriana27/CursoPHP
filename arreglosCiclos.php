<?php 

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

echo "=====================<br>";
echo "Recorriendo el arreglo con for<br>";
echo "=====================<br>";

// Recorrer con for
for($i = 0; $i < count($meses); $i++){
    echo "El mes es: $meses[$i] <br>";
}

echo "<br>=====================<br>";
echo "Recorriendo el arreglo con While<br>";
echo "=====================<br>";

// Recorrer con While
$contador = 0;
while($contador < count($meses)){
    echo "El mes es: $meses[$contador] <br>";
    $contador++;
}

?>
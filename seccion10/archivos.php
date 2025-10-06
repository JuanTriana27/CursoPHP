<?php

// Un archivo existe?
$resultado = file_exists('documento.txt');

if(file_exists('documento.txt')) {
    echo 'El archivo si existe';
} else {
    echo 'El archivo no existe';
}

// Leer contenido del archivo
//echo file_get_contents('documento.txt', 'Hola mundo');

// Escribir en un archivo + append para agregar contenido
//file_put_contents("documento.txt", "Adios mundo \n", FILE_APPEND);

// Secuencia de 1 a 10
file_put_contents("documento.txt", "");
for($i=1 ; $i<=10 ; $i++) {
    file_put_contents("documento.txt", "Linea $i \n", FILE_APPEND);
}

// Fnciones fila que convierte archivo a arreglo
$archivo = file('documento.txt');
echo '<pre>';
print_r($archivo);

?>
<?php

// Funciones para manejo de rutas y archivos
echo pathinfo('../seccion10/documento.txt', PATHINFO_BASENAME); // documento.txt

echo '<br>';

// Obtener todos los archivos con una extension especifica
$resultados = glob('../seccion10/*.{txt}', GLOB_BRACE);
print_r($resultados); // Array con todos los archivos .txt en la carpeta

echo '<br>';

// Obtener el nombre del archivo sin la extension
echo basename('../seccion10/documento.txt'); // documento

echo '<br>';

// Devolver el directorio padre
echo dirname('../seccion10/documento.txt'); // ../seccion10
<?php

$texto = "<> & ' ";

echo htmlspecialchars($texto);

echo trim($texto); // Elimina espacios en blanco al principio y al final de la cadena

echo strlen($texto); // Devuelve la longitud de la cadena
?>
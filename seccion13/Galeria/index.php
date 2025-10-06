<?php

// Conexión a la base de datos
require 'funciones.php';
$conexion = conexion('curso_galeria', 'root', 'admin');
if (!$conexion) {
    die();
}

// Configuración de la paginación
$fotos_por_pagina = 1;

$pagina_actual = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$inicio = ($pagina_actual > 1) ? ($pagina_actual * $fotos_por_pagina - $fotos_por_pagina) : 0;

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
    header('Location: subir.php');
}

// Calcular total de fotos
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_fotos = $statement->fetch()['total_filas'];

// Calcular total de páginas
$total_paginas = ceil($total_fotos / $fotos_por_pagina);

require 'views/index.view.php';

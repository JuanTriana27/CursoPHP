<?php
require 'admin/config.php';
require 'functions.php';

// Conexion a la base de datos
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

// Buscar lo que el usuario escribio
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);
    $statement = $conexion->prepare('SELECT * FROM articulos WHERE titulo LIKE :titulo OR extracto LIKE :extracto OR texto LIKE :texto');
    $statement->execute(array(
        ':titulo' => "%$busqueda%",
        ':extracto' => "%$busqueda%",
        ':texto' => "%$busqueda%"
    ));
    $resultados = $statement->fetchAll();

    if (empty($resultados)) {
        $mensaje = 'No hay resultados para esa busqueda';
    } else {
        $mensaje = 'Resultados de la busqueda: ' . $busqueda;
    }
} else {
    header('Location: ' . RUTA . '/Blog');
    exit();
}

require 'views/buscar.view.php';
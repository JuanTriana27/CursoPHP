<?php

session_start();

require 'config.php';
require '../functions.php';

// Comprobar session
comprobarSession();

// conexion a db
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

// Borrar segun id
$id = limpiarDatos($_GET['id']);

// Comprobar que el id exista
if (!$id) {
    header('Location: ' . RUTA . 'admin/');
}

// Preparar y ejecutar
$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id');
$statement->execute(array(':id' => $id));

// Redirigir
header('Location: ' . RUTA . 'admin/');

<?php

// Conexión a la base de datos
require 'funciones.php';
$conexion = conexion('curso_galeria', 'root', 'admin');
if (!$conexion) {
    die();
}

// Obtener la foto por su ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

if (!$id) {
    header('Location: index.php');
}

$statement = $conexion->prepare("SELECT * FROM fotos WHERE id_imagen = :id");
$statement->execute(['id' => $id]);
$foto = $statement->fetch();

if (!$foto) {
    header('Location: index.php');
}

require 'views/foto.view.php';

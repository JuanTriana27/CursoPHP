<?php
require 'admin/config.php';
require 'functions.php';

// Conexion a la base de datos
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

// Validar que el id sea correcto
$id_articulo = id_articulo($_GET['id']);
if(empty($id_articulo)){
    header('Location: '.RUTA);
}

// Obtener el articulo
$post = obtener_post_por_id($conexion, $id_articulo);
if(!$post){
    header('Location: '.RUTA);
}

require 'views/single.view.php';
?>
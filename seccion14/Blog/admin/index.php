<?php
// Index del admin

session_start();

require 'config.php';
require '../functions.php';

// Conexion
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

// Comprobar si el usuario esta logueado
comprobarSession();

// Obtener post
$post = obtenerPost($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';

?>
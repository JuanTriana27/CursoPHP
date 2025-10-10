<?php
require 'admin/config.php';
require 'functions.php';

// Conexion a la base de datos
$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

$post = obtenerPost($blog_config['post_por_pagina'], $conexion);

if (!$post) {
    header('Location: error.php');
}

require 'views/index.view.php';
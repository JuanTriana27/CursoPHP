<!-- Configuracion de la web -->

<?php
define('RUTA', 'http://localhost/cursoPHP/seccion14/Blog/');

$bd_config = array(
    'daba_base' => 'blog_curso',
    'usuario' => 'root',
    'pass' => 'admin'
);

$blog_config = array(
    'post_por_pagina' => '2',
    'ruta_imagenes' => 'img/'
);

$blog_admin = array(
    'usuario' => 'admin',
    'password' => 'admin'
);
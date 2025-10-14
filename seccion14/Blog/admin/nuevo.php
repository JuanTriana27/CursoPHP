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

// Comprobar envio del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name'];

    // Ruta de donde se guarda
    $archibo_subido = '../' . $blog_config['ruta_imagenes'] . $_FILES['thumb']['name'];

    // Mover la imagen a la carpeta
    move_uploaded_file($thumb, $archibo_subido);

    // Insertar en la db
    $statement = $conexion->prepare(
        'INSERT INTO articulos (id, titulo, extracto, texto, thumb) 
    VALUES (null, :titulo, :extracto, :texto, :thumb)'
    );

    // Ejecutar
    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    // Accedemos a la ruta
    header('Location: ' . RUTA . 'admin/');
}

require '../views/nuevo.view.php';

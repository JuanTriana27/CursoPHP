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
    // Recibir datos
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $thumb_guardada = $_POST['thumb-guardada'];
    $thumb = $_FILES['thumb']['tmp_name'];

    // Comprobaciones
    if (empty($thumb)) {
        $thumb = $thumb_guardada;
    } else {
        // Ruta de donde se guarda
        $archibo_subido = '../' . $blog_config['ruta_imagenes'] . $_FILES['thumb']['name'];

        // Mover la imagen a la carpeta
        move_uploaded_file($thumb, $archibo_subido);

        $thumb = $_FILES['thumb']['name'];
    }

    // Ejecutar conexion
    $statement = $conexion->prepare(
        'UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb 
        WHERE id = :id'
    );

    // Ejecutar
    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $thumb,
        ':id' => $id
    ));

    // Redirigir
    header('Location: ' . RUTA . 'admin/');
} else {
    // Obtener id del articulo
    $id_articulo = id_articulo($_GET['id']);

    // Si esta vacio redirigir
    if (empty($id_articulo)) {
        header('Location: ' . RUTA . 'admin/');
    }

    // Obtener el articulo
    $post = obtener_post_por_id($conexion, $id_articulo);

    if (!$post) {
        header('Location: ' . RUTA . 'admin/');
    }
}

require '../views/editar.view.php';

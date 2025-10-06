<?php

// Conexión a la base de datos
require 'funciones.php';
$conexion = conexion('curso_galeria', 'root', 'admin');
if (!$conexion) {
    // header('Location: index.php');
    die();
} else {
    // echo "Conectado";
}

// Validar el formulario y que no este vacío
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {

    $check = @getimagesize($_FILES['foto']['tmp_name']);

    if ($check !== false) {
        $carpeta_destino = 'images/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        // Datos a la db
        $statement = $conexion->prepare
        ('INSERT INTO fotos (titulo, texto, imagen) 
        VALUES (:titulo, :texto, :imagen)');

        // Ejecutar la consulta
        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':texto' => $_POST['texto'],
            ':imagen' => $_FILES['foto']['name']
        ));

        // Redirigir a la página principal
        header('Location: index.php');
    } else {
        $error = "El archivo no es una imagen o es demasiado pesado";
    }
}

require 'views/subir.view.php';

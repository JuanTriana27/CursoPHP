<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'admin', 'curso');

if ($conexion->connect_errno) {
    die('Hubo un problema con el servidor: ' . $conexion->connect_error);
} else {
    $statement = $conexion->prepare("INSERT INTO usuarios (id, nombre, edad) VALUES (?, ?, ?)");

    // Preparar la sentencia
    // Por cada placeholder el la consulta, se debe especificar el tipo de dato
    // 'i' para enteros, 's' para cadenas de texto, 'd' para dobles
    $statement->bind_param('ssi', $id, $nombre, $edad);
    $id = null; // Auto-incremental, se puede dejar como null

    // Si se reciben parámetros por GET, se asignan a las variables
    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }

    $statement->execute();

    if ($conexion->affected_rows >= 1) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar los datos: ";
    }
}
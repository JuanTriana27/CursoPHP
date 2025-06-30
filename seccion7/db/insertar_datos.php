<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'admin', 'curso');

if ($conexion->connect_errno) {
    die('Hubo un problema con el servidor: ' . $conexion->connect_error);
} else {
    $sql = "INSERT INTO usuarios (id, nombre, edad) VALUES 
    (null, 'Juancho', 47)";
    $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        echo "Datos insertados correctamente " . $conexion->affected_rows . " filas afectadas.";
    } else {
        echo "Error al insertar los datos: " . $conexion->error;
    }
}
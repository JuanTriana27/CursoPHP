<?php

// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'admin', 'curso');

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
} else {
    // echo "Conexión exitosa a la base de datos";

    // $id = isset($_GET['id']) ? $_GET['id'] : 1;
    // $sql = "SELECT * FROM usuarios WHERE id = $id";
    $sql = "SELECT * FROM usuarios";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows) {
        // Imprimir registro de 1 en 1
        // echo '<pre>';
        // var_dump($resultado->fetch_assoc());
        // var_dump($resultado->fetch_assoc());
        // echo '</pre>';

        while ($fila = $resultado->fetch_assoc()) {
            echo $fila['id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['edad'] . '<br>';
        }
    } else {
        echo "No se encontraron registros";
    }
}
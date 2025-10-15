<?php

error_reporting(0);
header('content-type: application/json; charset=utf-8');

// Conexion a la db
$conexion = new mysqli('localhost', 'root', 'admin', 'curso_php_ajax');

// CORRECCIÓN 1: Lógica correcta de conexión
if ($conexion->connect_errno) { // Si HAY error de conexión
    $respuesta = [
        'error' => true
    ];
} else { // Si NO hay error de conexión
    $conexion->set_charset("utf8");
    $statement = $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();

    $resultados = $statement->get_result();

    $respuesta = [];

    // CORRECCIÓN 2: Asignar el resultado a $fila
    while ($fila = $resultados->fetch_assoc()) {
        $usuario = [
            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'edad' => $fila['edad'],
            'pais' => $fila['pais'],
            'correo' => $fila['correo']
        ];

        array_push($respuesta, $usuario);
    }
}

echo json_encode($respuesta);

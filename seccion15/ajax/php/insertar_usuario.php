<?php
error_reporting(0);

// Establecer header
header('Content-Type: application/json; charset=utf-8');

// Inicializar respuesta
$respuesta = ['error' => true];

// Verificar que existan los datos POST
if (!isset($_POST['nombre']) || !isset($_POST['edad']) || !isset($_POST['pais']) || !isset($_POST['correo'])) {
    echo json_encode($respuesta);
    exit;
}

// Recibimos datos
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$correo = $_POST['correo'];

// Se limpian datos
$nombre = trim(htmlspecialchars($nombre));
$edad = intval($edad);
$pais = trim(htmlspecialchars($pais));
$correo = trim(filter_var($correo, FILTER_SANITIZE_EMAIL));

// Validamos datos
function validarDatos($nombre, $edad, $pais, $correo)
{
    if ($nombre == '') {
        return false;
    } elseif ($edad <= 0 || $edad > 120) { // Validación más realista para edad
        return false;
    } elseif ($pais == '') {
        return false;
    } elseif ($correo == '' || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

// Utilizamos los datos si estan validados
if (validarDatos($nombre, $edad, $pais, $correo)) {

    // Si es valido iniciamos la conexion
    $conexion = new mysqli('localhost', 'root', 'admin', 'curso_php_ajax');

    // Manejo de errores de conexión
    if ($conexion->connect_errno) {
        $respuesta = ['error' => true, 'mensaje' => 'Error de conexión a la BD'];
    } else {
        $conexion->set_charset("utf8");

        // Preparamos la consulta
        $statement = $conexion->prepare("INSERT INTO usuarios (nombre, edad, pais, correo) VALUES (?, ?, ?, ?)");

        if ($statement) {
            // Asignamos tipo de dato
            $statement->bind_param("siss", $nombre, $edad, $pais, $correo);

            // Ejecutamos
            if ($statement->execute()) {
                // ÉXITO: Cambiamos la respuesta a success
                $respuesta = ['success' => true];
            } else {
                $respuesta = ['error' => true, 'mensaje' => 'Error al ejecutar la consulta'];
            }

            $statement->close();
        } else {
            $respuesta = ['error' => true, 'mensaje' => 'Error al preparar la consulta'];
        }

        $conexion->close();
    }
} else {
    $respuesta = ['error' => true, 'mensaje' => 'Datos de formulario inválidos'];
}

echo json_encode($respuesta);

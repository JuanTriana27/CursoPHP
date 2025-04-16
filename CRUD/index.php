<?php

// Conexión a la base de datos
try {
    $conection = new PDO('mysql:host=localhost;dbname=crud', 'root', 'admin');
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Operación de Eliminar
if (isset($_GET['eliminar'])) {
    $id = filter_var($_GET['eliminar'], FILTER_VALIDATE_INT);
    if ($id !== false) {
        $stmt = $conection->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    header('Location: index.php');
    exit;
}

// Operación de Actualizar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $mensaje = $_POST['mensaje'];
    $sexo = $_POST['sexo'];

    if ($id !== false) {
        $stmt = $conection->prepare("UPDATE users SET 
            nombre = :nombre,
            apellido = :apellido,
            correo = :correo,
            edad = :edad,
            mensaje = :mensaje,
            sexo = :sexo
            WHERE id = :id");

        $stmt->execute([
            ':id' => $id,
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':edad' => $edad,
            ':mensaje' => $mensaje,
            ':sexo' => $sexo
        ]);
    }

    header('Location: index.php');
    exit;
}

// Metodo POST para insertar datos en la base de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'] ?? null;
    $apellido = $_POST['apellido'] ?? null;
    $correo = $_POST['correo'] ?? null;
    $edad = $_POST['edad'] ?? null;
    $mensaje = $_POST['mensaje'] ?? null;
    $sexo = $_POST['sexo'] ?? null;

    try {
        $sql = "INSERT INTO users (nombre, apellido, correo, edad, mensaje, sexo) 
                VALUES (:nombre, :apellido, :correo, :edad, :mensaje, :sexo)";

        $stmt = $conection->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->bindParam(':sexo', $sexo);

        $stmt->execute();

        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

require 'index.view.php';

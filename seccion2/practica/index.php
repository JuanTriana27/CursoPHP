<?php

$errores = ''; // Variable para almacenar errores
$enviado = ''; // Variable para verificar si el formulario fue enviado

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre); // Elimina espacios en blanco al inicio y al final
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); // Elimina etiquetas HTML y PHP
    } else {
        $errores .= "Ingresa un Nombre<br>";
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); // Elimina etiquetas HTML y PHP
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { // Valida el formato del correo
            $errores .= "Ingresa un Correo Valido<br>";
        }
    } else {
        $errores .= "Ingresa un Correo<br>";
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje); // Elimina etiquetas HTML y PHP
        $mensaje = trim($mensaje); // Elimina espacios en blanco al inicio y al final
        $mensaje = stripslashes($mensaje); // Elimina las barras invertidas
    } else {
        $errores .= "Ingresa un Mensaje<br>";
    }

    if (!$errores) {
        $enviar_a = 'trianajuan28@gmail.com';
        $asunto = 'Correo de prueba desde PHP';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: $mensaje \n";

        //mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = true; // Cambia el estado a enviado
    }
}

require 'index.view.php';

<?php
session_start();

// Verificar sesion
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

// Datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';
    $success = '';

    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<li>Por favor rellena todos los datos correctamente</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', 'admin');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Verificar que el usuario no exista
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE nombre_usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        // Mostra mensajes
        if ($resultado != false) {
            $errores .= '<li>El nombre de usuario ya existe</li>';
        } else {
            $success .= '<li>Usuario creado Correctamente</li>';
        }

        // Hashear password
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }
    }

    if ($errores == '') {
        $statement = $conexion->prepare(
            'INSERT INTO usuarios (id_usuario, nombre_usuario, contrasena) 
            VALUES (null, :usuario, :pass);'
        );
        $statement->execute(array(
            ':usuario' => $usuario,
            ':pass' => $password
        ));

        header('Location: login.php');
    }
}

require 'views/registro.view.php';

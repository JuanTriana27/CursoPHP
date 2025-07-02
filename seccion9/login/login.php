<?php
session_start();

// Verificar sesion
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

// Comprobar si el usuario envio los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', 'admin');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $errores = '';
    $success = '';

    $statement = $conexion->prepare(
        'SELECT * FROM usuarios WHERE nombre_usuario = :usuario AND contrasena = :password'
    );
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));

    $resultado = $statement->fetch();

    if ($resultado != false) {
        $_SESSION['usuario'] = $usuario;
        $success .= '<li>Datos Correctos</li>';
        header('Location: index.php');
    } else {
        $errores .= '<li>Datos Incorrectos</li>';
    }
}

require 'views/login.view.php';
<?php

// Iniciar la sesion
session_start();

require 'admin/config.php';
require 'functions.php';

// Comprobar si el usuario ya ha iniciado sesion
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    if($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location: ' . RUTA . 'admin');
    } else {
        $error = 'Usuario o contraseña incorrectos';
    }
}

require 'views/login.view.php';
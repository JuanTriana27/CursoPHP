<?php

require 'config.php';

session_start();
$_SESSION = array(); // Vaciar la session
header('Location: ' . RUTA); // Redirigir al inicio
exit();

?>
<?php

// Conexión a la base de datos
new mysqli('localhost', 'root', 'admin', 'curso');

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
} else {
    echo "Conexión exitosa a la base de datos";
}

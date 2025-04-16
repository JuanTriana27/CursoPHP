<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;

try {
    // Conectar a la base de datos
    $conection = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', 'admin');

    // Conectado correctamente
    echo "Conectado correctamente a la base de datos" . "<br>";

    // Formas de traer los datos

    /*
    // 1. Metodo Query (No recomendable, se pueden inyectar datos)
    $resultados = $conection->query('SELECT * FROM usuarios');

    foreach($resultados as $fila){
        echo $fila['ID'] . ' - ' . $fila['nombre'] . "<br>";

    }

    // Insertar datos
    $resultados = $conection->query('INSERT INTO usuarios VALUES (null, "Natalia")');
    */

    // 2. Metodo prepare (Recomendable)
    
    $statement = $conection->prepare('SELECT * FROM usuarios');
    $statement->execute();

    $resultado = $statement->fetchAll();
    foreach($resultado as $usuario){
        echo $usuario['nombre'] . "<br>";
    }

} catch (PDOException $e) {
    // Mostrar Errores
    echo "Error: " . $e->getMessage();
}

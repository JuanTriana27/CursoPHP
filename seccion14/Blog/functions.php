<?php

// Funcion para conexion a la base de datos
function conexion($bd_config)
{
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['daba_base'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Cuando se quiera conectar a la base de datos
// $conexion = conexion($bd_config);

// Funcion para limpiar datos, se pasa informacion, se limpia y devuelve los datos limpios
function limpiarDatos($datos){
    $datos = trim($datos); // Elimina espacios en blanco al inicio y al final
    $datos = stripslashes($datos); // Elimina las barras invertidas
    $datos = htmlspecialchars($datos); // Convierte caracteres especiales en entidades HTML
    return $datos;
}

// Function para obtener la pagina actual
function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1; // Si esta seteada entonces devuelve el valor, sino devuelve 1
}

// Funcion para obtener los articulos de la base de datos
function obtenerPost($post_por_pagina, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0; // Si la pagina actual es mayor a 1, entonces calcula el inicio, sino es 0
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina"); // Consulta SQL para obtener los articulos con limite
    $sentencia->execute(); // Ejecuta la consulta
    return $sentencia->fetchAll(); // Devuelve todos los resultados
}

// Funcion para obtener el numero de paginas
function numero_paginas($post_por_pagina, $conexion){
    $total_post = $conexion->prepare("SELECT COUNT(*) as total FROM articulos");
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];
    return ceil($total_post / $post_por_pagina);
}

// Funcion para obtener id del articulo
function id_articulo($id){
    return (int)limpiarDatos($id); // Limpia el id y lo convierte a entero
}

// Funcion para obtener el post por id
function obtener_post_por_id($conexion, $id){
    $resultado = $conexion->prepare("SELECT * FROM articulos WHERE id = :id LIMIT 1");
    $resultado->execute([':id' => $id]);
    return $resultado->fetch(PDO::FETCH_ASSOC); // Devuelve un array asociativo
}

// Funcion para formatear la fecha
function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp);
    $year = date('Y', $timestamp);
    $fecha = $dia . ' de ' . $meses[$mes - 1] . ' del ' . $year; // -1 porque los arrays empiezan en 0
    return $fecha;
}

// Funcion para proteger archivos con comprobacion de session
function comprobarSession(){
    if(!isset($_SESSION['admin'])){
        header('Location: ' . RUTA);
    }
}
<?php
try {

    // Conexion a la base de datos
    $conexion = new PDO('mysql:host=localhost;dbname=curso', 'root', 'admin');
} catch (Exception $e) {
    // Manejo de excepciones
    echo "Error: " . $e->getMessage();
    die("Error al cargar la página");
}

// Configuración de la conexión
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Articulos por página
$postPorPagina = 5;

// Validación de la página
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

// Consulta para mostrar y calcular el total de artículos
$articulos = $conexion->prepare(
    "SELECT SQL_CALC_FOUND_ROWS * 
    FROM articulos 
    LIMIT :inicio, :postPorPagina"
);

// Vinculamos los parámetros de la consulta
$articulos->bindValue(':inicio', (int)$inicio, PDO::PARAM_INT);
$articulos->bindValue(':postPorPagina', (int)$postPorPagina, PDO::PARAM_INT);

// Ejecutamos la consulta
$articulos->execute();

// Obtenemos los resultados
$articulos = $articulos->fetchAll();

// Verificamos si hay artículos disponibles
if (!$articulos) {
    echo "No hay artículos disponibles.";
    header("Location: ../index.php");
}

// Obtenemos el total de artículos usando FOUND_ROWS()
$totalArticulos = $conexion->query("SELECT FOUND_ROWS() as 'total'");
$totalArticulos = $totalArticulos->fetch()['total'];

// Calculamos el número total de páginas
$numeroPaginas = ceil($totalArticulos / $postPorPagina);

// Llamamos la vista index ya que aca se trabaja la logica
require './paginacion/index.view.php';

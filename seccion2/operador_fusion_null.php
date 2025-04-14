<?php

//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Sin nombre';

$nombre = $_GET['nombre'] ?? 'Sin nombre';

echo $nombre;
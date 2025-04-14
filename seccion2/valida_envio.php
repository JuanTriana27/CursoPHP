<?php

// if ($_SERVER['REQUEST_METHOD']=='POST'){
//     echo "Se enviaron con POST";
// } else {
//     echo "Se enviaron con GET";
// }


// Se pueden comprobar varios formularios
if (isset($_POST['submit'])) {
    echo "Se enviaron correctamente los datos";
    print_r($_POST['submit']);
} else {
    echo "No se enviaron los datos";
}
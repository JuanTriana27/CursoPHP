<?php

header('content-type: application/json; charset=utf-8');

$respuesta = [
    [
        'id' => 'ashdkha21893',
        'nombre' => 'Juan',
        'edad' => '23',
        'pais' => 'Colombia',
        'correo' => 'juan@gmail.com'
    ],
    [
        'id' => 'ashdk12321893',
        'nombre' => 'Natalia',
        'edad' => '23',
        'pais' => 'Colombia',
        'correo' => 'nat@gmail.com'
    ]
];

// Pasar a json la respuesta
echo json_encode($respuesta);

// echo '[
//     {
//         "Nombre": "Juan",
//         "Edad": 23,
//         "Pais": "Colombia",
//         "Correo": "juan@ejemplo.com"
//     }
// ]';

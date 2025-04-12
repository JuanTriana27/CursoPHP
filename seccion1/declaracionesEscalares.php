<?php

declare(strict_types=1);
function cuadrado(int $num)
{
    return $num * $num;
}

$num = 55;

echo "El cuadrado de $num es: " . cuadrado($num) . "<br>";

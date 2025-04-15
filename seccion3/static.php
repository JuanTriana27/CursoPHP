<?php 

class Persona {
    public static $dia = '15 de abril';

    public static function saludo($nombre = null){
        if($nombre){
            return "Hola, buen día " . $nombre . "<br>";
        }else{
            return "Hola, buen día <br>";
        }
    }
}

// $juan = new Persona();
echo Persona::saludo('German'); // Acceso a la propiedad estática
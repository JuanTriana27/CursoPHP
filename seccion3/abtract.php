<?php

abstract class Persona{
   public $saludo;

    public function __construct($saludo = "Hola soy una persona"){
         $this->saludo = $saludo;
    }

    public function saludo(){
        return $this->saludo;
    }
}

class Estudiante extends Persona{
    public $universidad;
    public $carrera;

    public function __construct($universidad, $carrera){
        parent::__construct("Hola soy un estudiante");
        $this->universidad = $universidad;
        $this->carrera = $carrera;
    }

    public function mostrarInformacionEstudiante(){
        return "Universidad: " . $this->universidad . "<br>" . "Carrera: " . $this->carrera . "<br>";
    }
}

$juan = new Estudiante("Universidad Nacional", "Ingeniería");
echo $juan->mostrarInformacionEstudiante();
echo $juan->saludo();
echo "<br>";
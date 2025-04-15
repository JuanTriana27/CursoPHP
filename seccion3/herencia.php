<?php

// Clase persona
class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    // Metodo Constructor
    function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    // Metodo para mostrar la información de la persona
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Pais: " . $this->pais . "<br>";
    }
}

// Clase Estudiante que hereda de Persona
class Estudiante extends persona{
    public $universidad;
    public $carrera;

    // Metodo Constructor
    function __construct($nombre, $edad, $pais, $universidad, $carrera){
        // Llamar al constructor de la clase padre
        parent::__construct($nombre, $edad, $pais);
        $this->universidad = $universidad;
        $this->carrera = $carrera;
    }

    // Metodo para mostrar la información del estudiante
    public function mostrarInformacionEstudiante()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Pais: " . $this->pais . "<br>";
        echo "Universidad: " . $this->universidad . "<br>";
        echo "Carrera: " . $this->carrera . "<br>";
    }
}

// Crear un objeto de la clase Estudiante
$estudiante = new Estudiante('Juan', 20, 'Colombia', 'USB', 'Ingeniería');
$estudiante ->mostrarInformacionEstudiante();
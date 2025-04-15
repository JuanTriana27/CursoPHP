<?php

// Clase persona
class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    // Metodo para mostrar la información de la persona
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Pais: " . $this->pais . "<br>";
    }

    // Metodo Constructor
    function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
}

$carlos = new Persona('carlos', 30, 'Mexico');

$natalia = new Persona('natalia', 25, 'Colombia');

// Mostrar información de Carlos
$carlos->mostrarInformacion();
echo "<br>";

// Mostrar información de Natalia
$natalia->mostrarInformacion();
echo "<br>";
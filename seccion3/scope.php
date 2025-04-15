<?php

// Tipos de Scope
// Scope de clase: Se refiere a la visibilidad de las propiedades y métodos dentro de una clase.
// public: Accesible desde cualquier parte del código.
// private: Accesible solo dentro de la clase donde se define.
// protected: Accesible dentro de la clase y en las clases que heredan de ella.

class Usuario
{
    public $nombre;
    protected $correo;

    // Metodo Constructor
    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Metodo para mostrar la información del usuario
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Correo: " . $this->correo . "<br>";
    }
}

class Mienbro extends Usuario{
    public function mostrarCorreo(){
        return $this->correo;
    }
}

// Crear un objeto de la clase Usuario
$juan = new Mienbro('Juan', 'trianajuan28@gmail.com');
echo $juan->mostrarCorreo();

<?php

class Usuario{
    public $nombre;
    public $correo;

    // constructor
    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // metodo para mostrar nombre
    public function mostrarNombre(){
        echo "Nombre: " . $this->nombre . "<br>";
        return $this;
    }

    // metodo para mostrar correo
    public function mostrarCorreo(){
        echo "Correo: " . $this->correo . "<br>";
        return $this;
    }
}

// Crear un objeto de la clase Usuario
$juan = new Usuario('Juan', 'Trianajuan28@gmail.com');
$juan->mostrarNombre()-> mostrarCorreo();
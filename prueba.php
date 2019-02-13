<?php

class Persona{
    //Atributos
    public $nombre = array();
    public $apellido = array();

    //Metodos
    public function guardar($nombre, $apellido){
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;

    }

    public function guardar(){
        
    }

    $persona = new Persona();

}
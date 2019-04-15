<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

Class Usuario {
    public $usuarios;
    public $conectar;

    public $id_usuario;
    public $nombre_usuario;
    public $password;


    public function Usuario(){
        $this->conectar = new Conexion();
        $this->usuarios = array();
        

    }

    public function obtenerDatosUsuario($usuario,$password){
        $conectar = $this->conectar->conectar();
        $query ="SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND password= ('$password') ";
        $consultar = mysqli_query($conectar,$query);


        while($dado = mysqli_fetch_assoc($consultar)){
            $this->usuarios[] = $dado;
        }

        return $this->usuarios;
    }




}
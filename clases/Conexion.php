<?php
header ('Access-Control-Allow-Origin: * ');

class Conexion {
    public $bd="conta";
    public $usuario="root";
    public $password="";

    public function conectar (){
        $conectar = mysqli_connect("localhost",$this->usuario,$this->password,$this->bd);
        $conectar->set_charset("utf8");
        
        if(!$conectar){
            echo "error";
        }
        else{
            echo "OK";
        }

        return $conectar;
    }
}


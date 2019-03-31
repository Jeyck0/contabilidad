<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

Class CatIngresos {
    public $catIngresos;
    public $conectar;
    public $codigo;
    public $nombre;
    

    public function CatIngresos(){
        $this->conectar = new Conexion();
        $this->catIngresos = array();
        

    }
    public function insertarCatIngresos($codigo_catIngresos,$nombre_catIngresos){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO cat_ingresos (codigo,nombre) VALUES ('".$codigo_catIngresos."','".$nombre_catIngresos."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosCatIngresos(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT * FROM cat_ingresos";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catIngresos[] = $dado;
        }

        return $this->catIngresos;
    }
}
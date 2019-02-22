<?php
require_once ("Conexion.php");

Class CatEgresos {
    public $catEgresos;
    public $conectar;
    public $codigo;
    public $nombre;
    

    public function CatEgresos(){
        $this->conectar = new Conexion();
        $this->catEgresos = array();
        

    }
    public function insertarCatEgresos($codigo_catEgresos,$nombre_catEgresos){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO cat_egresos (codigo,nombre) VALUES ('".$codigo_catEgresos."','".$nombre_catEgresos."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosCatEgresos(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT * FROM cat_egresos";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catEgresos[] = $dado;
        }

        return $this->catEgresos;
    }
}
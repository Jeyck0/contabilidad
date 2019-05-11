<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

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
        $query ="SELECT nombre as nombre_categoria, id_cat_egreso as id_categoria,codigo as codigo_categoria FROM cat_egresos ";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catEgresos[] = $dado;
        }

        return $this->catEgresos;
    }

    public function obtenerDatosCatEgresosId($id_padre_cat){
        $conectar = $this->conectar->conectar();
        $query = "SELECT ce.nombre, id_cat_padre_egresos FROM cat_egresos ce, cat_padre_egresos cpe WHERE ce.id_cat_padre_egresos = cpe.id_padre_egreso AND id_cat_padre_egresos = '$id_padre_cat'"; 
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catEgresos[] = $dado;
        }

        return $this->catEgresos;

    }
}
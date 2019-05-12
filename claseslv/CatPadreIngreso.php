<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

Class CatPadreIngreso {
    public $catPadreIngreso;
    public $conectar;
    public $codigo;
    public $nombre;
    

    public function CatPadreIngreso(){
        $this->conectar = new Conexion();
        $this->catPadreEgreso = array();
        

    }


    public function obtenerDatosCatPadrIngreso(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT id_padre_ingreso,codigo,nombre FROM cat_padre_ingresos";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catPadreIngreso[] = $dado;
        }

        return $this->catPadreIngreso;
    }

    public function obtenerDatosCatPadreIngresoNoSelect($nid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT id_padre_ingreso,codigo,nombre FROM cat_padre_ingresos WHERE id_padre_ingreso !=$nid";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catPadreIngreso[] = $dado;
        }

        return $this->catPadreIngreso;
    }
}
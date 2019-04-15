<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

Class CatPadreEgreso {
    public $catPadreEgreso;
    public $conectar;
    public $codigo;
    public $nombre;
    

    public function CatPadreEgreso(){
        $this->conectar = new Conexion();
        $this->catPadreEgreso = array();
        

    }
    public function insertarCatPadreEgreso($codigo_catPadreEgreso,$nombre_catPadreEgreso){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO cat_padre_egresos (codigo,nombre) VALUES ('".$codigo_catPadreEgreso."','".$nombre_catPadreEgreso."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosCatPadreEgreso(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT id_padre_egreso,codigo,nombre FROM cat_padre_egresos";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catPadreEgreso[] = $dado;
        }

        return $this->catPadreEgreso;
    }

    public function obtenerDatosCatPadreEgresoNoSelect($nid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT id_padre_egreso,codigo,nombre FROM cat_padre_egresos WHERE id_padre_egreso !=$nid";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->catPadreEgreso[] = $dado;
        }

        return $this->catPadreEgreso;
    }
}
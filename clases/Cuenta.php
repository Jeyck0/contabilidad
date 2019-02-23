<?php
require_once ("Conexion.php");

Class Cuenta {
    public $cuentas;
    public $conectar;
    public $numero;
    public $nombre;
    public $monto;
    public $id;

    public function Cuenta(){
        $this->conectar = new Conexion();
        $this->cuentas = array();
        

    }
    public function insertarCuenta($nombre_cuenta,$monto_inicial_cuenta){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO cuentas (nombre,capital) VALUES ('".$nombre_cuenta."','".$monto_inicial_cuenta."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosCuenta(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT * FROM cuentas";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->cuentas[] = $dado;
        }

        return $this->cuentas;
    }

    public function obtenerNombreId($id_datos_cuenta){
        $conectar = $this->conectar->conectar();
        $query ="SELECT nombre FROM cuentas WHERE id='$id_datos_cuenta'";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $nombre = $dado['nombre'];
        }

        return $nombre;
    }

    public function obtenerCapitalId($id_datos_cuenta){
        $conectar = $this->conectar->conectar();
        $query ="SELECT capital FROM cuentas WHERE id='$id_datos_cuenta'";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $capital = $dado['capital'];
        }

        return $capital;
    }

    public function actualizarDatosCuenta($nombre, $capital, $id_cuenta){
        $conectar = $this->conectar->conectar();
        $query_update="UPDATE cuentas SET nombre = '".$nombre."', capital = '".$capital."' WHERE id = '".$id_cuenta."' ";
        $consultar = mysqli_query($conectar,$query_update);

        return $consultar;

    }

}
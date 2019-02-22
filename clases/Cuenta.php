<?php
require_once ("Conexion.php");

Class Cuenta {
    public $cuentas;
    public $conectar;
    public $numero;
    public $nombre;
    public $monto;

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
}
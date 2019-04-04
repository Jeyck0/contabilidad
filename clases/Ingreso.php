<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

Class Ingreso {
    public $ingresos;
    public $conectar;

    public $monto;
    public $id_cuenta;
    public $id_cat_ingresos;
    public $fecha;
    public $comentario;

    public function Ingreso(){
        $this->conectar = new Conexion();
        $this->ingresos = array();
        

    }
    public function insertarIngresos($id_cuenta_ingreso,$id_cat_ingresos_ingreso,$monto_ingreso,$comentario_ingreso,$ingreso_fecha){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO ingresos (id_cuenta,id_cat_ingresos,monto,comentario,fecha) VALUES ('".$id_cuenta_ingreso."','".$id_cat_ingresos_ingreso."','".$monto_ingreso."','".$comentario_ingreso."','".$ingreso_fecha."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosIngresos(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, i.id_cat_ingresos, `comentario` as c6 ,c.nombre as c1,ci.nombre as c3,cpi.nombre as c2
        FROM `ingresos` i
        INNER JOIN cuentas c
        ON c.id=id_cuenta
        INNER JOIN cat_ingresos ci
        ON i.id_cat_ingresos=ci.id_cat_ingresos
        INNER JOIN cat_padre_ingresos cpi
        ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso
        ORDER BY i.id DESC";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->ingresos[] = $dado;
        }

        return $this->ingresos;
    }

    public function sumar($id_cuenta_sumar,$monto_sumar){
        
        $conectar = $this->conectar->conectar();
        $query = "SELECT capital FROM cuentas where id = '".$id_cuenta_sumar."' ";
        $consultar = mysqli_query($conectar,$query);
        
        while($dado = mysqli_fetch_assoc($consultar)){
            $capital = $dado['capital'];
        }

        $capital+=$monto_sumar;

        $query_update="UPDATE cuentas SET capital = '".$capital."' WHERE id = '".$id_cuenta_sumar."' ";
        $update = mysqli_query($conectar,$query_update);

        return $update;

    }

    public function contar(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT COUNT(id) as cid from ingresos";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $contar = $dado['cid'];
        }

        return $contar;
    }

    
}
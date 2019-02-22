<?php
require_once ("Conexion.php");

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
    public function insertarIngresos($id_cuenta_ingreso,$id_cat_ingresos_ingreso,$monto_ingreso,$comentario_ingreso){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO ingresos (id_cuenta,id_cat_ingresos,monto,comentario) VALUES ('".$id_cuenta_ingreso."','".$id_cat_ingresos_ingreso."','".$monto_ingreso."','".$comentario_ingreso."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosIngresos(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.comentario,i.fecha,i.id,i.monto,c.nombre as cnombre,cat.nombre FROM ingresos i INNER JOIN cuentas c ON i.id_cuenta=c.id INNER JOIN cat_ingresos cat ON i.id_cat_ingresos = cat.id";   
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

    
}
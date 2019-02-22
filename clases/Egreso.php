<?php
require_once ("Conexion.php");

Class Egreso {
    public $egresos;
    public $conectar;

    public $monto;
    public $id_cuenta;
    public $id_cat_egresos;
    public $fecha;
    public $comentario;

    public function Egreso(){
        $this->conectar = new Conexion();
        $this->egresos = array();
        

    }
    public function insertarEgresos($id_cuenta_egreso,$id_cat_egresos_egreso,$monto_egreso,$comentario_egreso){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO egresos (id_cuenta,id_cat_egresos,monto,comentario) VALUES ('".$id_cuenta_egreso."','".$id_cat_egresos_egreso."','".$monto_egreso."','".$comentario_egreso."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosEgresos(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT e.comentario,e.fecha,e.id,e.monto,c.nombre as cnombre,cat_e.nombre FROM egresos e INNER JOIN cuentas c ON e.id_cuenta=c.id INNER JOIN cat_egresos cat_e ON e.id_cat_egresos = cat_e.id ORDER BY e.id ASC";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->egresos[] = $dado;
        }

        return $this->egresos;
    }

    public function restar($id_cuenta_restar,$monto_restar){
        
        $conectar = $this->conectar->conectar();
        $query = "SELECT capital FROM cuentas where id = '".$id_cuenta_restar."' ";
        $consultar = mysqli_query($conectar,$query);
        
        while($dado = mysqli_fetch_assoc($consultar)){
            $capital = $dado['capital'];
        }

        $capital-=$monto_restar;

        $query_update="UPDATE cuentas SET capital = '".$capital."' WHERE id = '".$id_cuenta_restar."' ";
        $update = mysqli_query($conectar,$query_update);

        return $update;

    }
}
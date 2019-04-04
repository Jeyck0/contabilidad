<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');
header("Content-Type: text/html;charset=utf-8");

Class Egreso {
    public $egresos;
    public $conectar;

    public $monto;
    public $id_cuenta;
    public $id_cat_egresos;
    public $fecha;
    public $comentario;
    public $egresos_sep;

    public function Egreso(){
        $this->conectar = new Conexion();
        $this->egresos = array();
        $this->egresos_sep = array();
        

    }
    public function insertarEgresos($id_cuenta_egreso,$id_cat_egresos_egreso,$id_factura_egreso){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO egresos (id_cuenta,id_cat_egresos,id_factura) VALUES ('".$id_cuenta_egreso."','".$id_cat_egresos_egreso."','".$id_factura_egreso."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosEgresos(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT e.id as m0, `id_cuenta`, e.id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y'),c.nombre as m1,subcat.nombre as m3,catp.nombre as m2,f.folio as m5,DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') as m6,f.fecha_pago as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
        FROM `egresos` e 
        INNER JOIN cuentas c 
        ON e.id_cuenta = c.id 
        INNER JOIN cat_egresos subcat
        ON subcat.id_cat_egreso= e.id_cat_egresos
        INNER JOIN cat_padre_egresos catp
        ON subcat.id_cat_padre_egresos = catp.id_padre_egreso
        INNER JOIN facturas f
        ON f.id_factura=e.id_factura
        INNER JOIN proveedores p
        ON f.id_proveedor = p.id_proveedores ORDER BY e.id DESC";   
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

    public function contar(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT COUNT(id) as cid from egresos";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $contar = $dado['cid'];
        }

        return $contar;
    }

    public function editarEgreso($sid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT e.id as m0, `id_cuenta`, e.id_cat_egresos as id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y'),c.nombre as m1,subcat.nombre as m3,subcat.codigo as hijo_codigo,catp.nombre as m2,catp.id_padre_egreso as id_padre_egreso,catp.codigo as padre_codigo,f.id_factura as id_factura,f.folio as m5,f.fecha_emision as m6,f.fecha_pago as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
        FROM `egresos` e 
        INNER JOIN cuentas c 
        ON e.id_cuenta = c.id 
        INNER JOIN cat_egresos subcat
        ON subcat.id_cat_egreso= e.id_cat_egresos
        INNER JOIN cat_padre_egresos catp
        ON subcat.id_cat_padre_egresos = catp.id_padre_egreso
        INNER JOIN facturas f
        ON f.id_factura=e.id_factura
        INNER JOIN proveedores p
        ON f.id_proveedor = p.id_proveedores WHERE e.id='$sid'";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->egresos[] = $dado;
        }

        return $this->egresos;
    }


    public function updateEgreso($uid,$uid_cuenta,$uid_cat_egresos,$uid_factura){
        $conectar = $this->conectar->conectar();
        $query ="UPDATE egresos SET id_cuenta = '".$uid_cuenta."', id_cat_egresos = '".$uid_cat_egresos."',id_factura = '".$uid_factura."' WHERE id = '".$uid."' ";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

    public function eliminarEgreso($did){
        $conectar = $this->conectar->conectar();
        $query ="DELETE FROM egresos WHERE id ='$did'";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

    public function obtenerDatosEgresosRango($finicio,$ftermino){
        $conectar = $this->conectar->conectar();
        $query ="SELECT e.id as m0, `id_cuenta`, e.id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y'),c.nombre as m1,subcat.nombre as m3,catp.nombre as m2,f.folio as m5,DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') as m6,f.fecha_pago as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
        FROM `egresos` e 
        INNER JOIN cuentas c 
        ON e.id_cuenta = c.id 
        INNER JOIN cat_egresos subcat
        ON subcat.id_cat_egreso= e.id_cat_egresos
        INNER JOIN cat_padre_egresos catp
        ON subcat.id_cat_padre_egresos = catp.id_padre_egreso
        INNER JOIN facturas f
        ON f.id_factura=e.id_factura
        INNER JOIN proveedores p
        ON f.id_proveedor = p.id_proveedores
        WHERE fecha BETWEEN '$finicio' AND '$ftermino'
        ORDER BY e.id DESC";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->egresos[] = $dado;
        }

        return $this->egresos;
    }

    public function insertarEgresosSep($id_cuenta_egreso,$id_cat_egresos_egreso,$id_factura_egreso){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO egresos_sep (id_cuenta,id_cat_egresos,id_factura) VALUES ('".$id_cuenta_egreso."','".$id_cat_egresos_egreso."','".$id_factura_egreso."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function contarSep(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT COUNT(id_egreso) as cid from egresos_sep";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $contar = $dado['cid'];
        }

        return $contar;
    }

    public function obtenerDatosEgresosSep(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT e.id_egreso as m0, `id_cuenta`, e.id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y'),c.nombre as m1,subcat.nombre as m3,catp.nombre as m2,f.folio as m5,DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') as m6,f.fecha_pago as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
        FROM `egresos_sep` e 
        INNER JOIN cuentas c 
        ON e.id_cuenta = c.id 
        INNER JOIN cat_egresos subcat
        ON subcat.id_cat_egreso= e.id_cat_egresos
        INNER JOIN cat_padre_egresos catp
        ON subcat.id_cat_padre_egresos = catp.id_padre_egreso
        INNER JOIN facturas f
        ON f.id_factura=e.id_factura
        INNER JOIN proveedores p
        ON f.id_proveedor = p.id_proveedores ORDER BY e.id_egreso DESC";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->egresos_sep[] = $dado;
        }

        return $this->egresos_sep;
    }

}
<?php
require_once ("Conexion.php");
header ('Access-Control-Allow-Origin: * ');

Class Ingreso {
    public $ingresos;
    public $ingresos2;
    public $ingresos3;
    public $conectar;

    public $monto;
    public $id_cuenta;
    public $id_cat_ingresos;
    public $fecha;
    public $comentario;

    public function Ingreso(){
        $this->conectar = new Conexion();
        $this->ingresos = array();
        $this->ingresos2 = array();
        $this->ingresos3 = array();

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

    public function editarIngreso($sid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, i.id_cat_ingresos as id_cat_ingresos, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, `comentario` as c6, c.nombre as m1,subcat.nombre as m3,subcat.codigo as hijo_codigo,catp.nombre as m2,catp.id_padre_ingreso as id_padre_ingreso,catp.codigo 
        FROM `ingresos` i 
        INNER JOIN cuentas c ON c.id=id_cuenta 
        INNER JOIN cat_ingresos subcat ON subcat.id_cat_ingresos= i.id_cat_ingresos 
        INNER JOIN cat_padre_ingresos catp ON subcat.id_cat_padre_ingresos = catp.id_padre_ingreso 
        INNER JOIN cat_ingresos ci ON i.id_cat_ingresos=ci.id_cat_ingresos 
        INNER JOIN cat_padre_ingresos cpi ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso 
        WHERE i.id = '$sid' ";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->ingresos[] = $dado;
        }

        return $this->ingresos;
    }

    public function editarIngresoSep($sid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, i.id_cat_ingresos as id_cat_ingresos, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, `comentario` as c6, c.nombre as m1,subcat.nombre as m3,subcat.codigo as hijo_codigo,catp.nombre as m2,catp.id_padre_ingreso as id_padre_ingreso,catp.codigo 
        FROM `ingresos_sep` i 
        INNER JOIN cuentas c ON c.id=id_cuenta 
        INNER JOIN cat_ingresos subcat ON subcat.id_cat_ingresos= i.id_cat_ingresos 
        INNER JOIN cat_padre_ingresos catp ON subcat.id_cat_padre_ingresos = catp.id_padre_ingreso 
        INNER JOIN cat_ingresos ci ON i.id_cat_ingresos=ci.id_cat_ingresos 
        INNER JOIN cat_padre_ingresos cpi ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso 
        WHERE i.id = '$sid' ";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->ingresos[] = $dado;
        }

        return $this->ingresos;
    }

    public function editarIngresoPie($sid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, i.id_cat_ingresos as id_cat_ingresos, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, `comentario` as c6, c.nombre as m1,subcat.nombre as m3,subcat.codigo as hijo_codigo,catp.nombre as m2,catp.id_padre_ingreso as id_padre_ingreso,catp.codigo 
        FROM `ingresos_pie` i 
        INNER JOIN cuentas c ON c.id=id_cuenta 
        INNER JOIN cat_ingresos subcat ON subcat.id_cat_ingresos= i.id_cat_ingresos 
        INNER JOIN cat_padre_ingresos catp ON subcat.id_cat_padre_ingresos = catp.id_padre_ingreso 
        INNER JOIN cat_ingresos ci ON i.id_cat_ingresos=ci.id_cat_ingresos 
        INNER JOIN cat_padre_ingresos cpi ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso 
        WHERE i.id = '$sid' ";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->ingresos[] = $dado;
        }

        return $this->ingresos;
    }

    public function updateIngreso($uid,$uid_cuenta,$uid_cat_egresos,$fecha,$monto,$comentario){
        $conectar = $this->conectar->conectar();
        $query ="UPDATE ingresos SET id_cuenta = '".$uid_cuenta."', id_cat_ingresos = '".$uid_cat_egresos."',fecha = '".$fecha."', monto = '".$monto."', comentario = '".$comentario."' WHERE id = '".$uid."' ";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

    public function updateIngresoSep($uid,$uid_cuenta,$uid_cat_egresos,$fecha,$monto,$comentario){
        $conectar = $this->conectar->conectar();
        $query ="UPDATE ingresos_sep SET id_cuenta = '".$uid_cuenta."', id_cat_ingresos = '".$uid_cat_egresos."',fecha = '".$fecha."', monto = '".$monto."', comentario = '".$comentario."' WHERE id = '".$uid."' ";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

    public function updateIngresoPie($uid,$uid_cuenta,$uid_cat_egresos,$fecha,$monto,$comentario){
        $conectar = $this->conectar->conectar();
        $query ="UPDATE ingresos_pie SET id_cuenta = '".$uid_cuenta."', id_cat_ingresos = '".$uid_cat_egresos."',fecha = '".$fecha."', monto = '".$monto."', comentario = '".$comentario."' WHERE id = '".$uid."' ";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

    public function insertarIngresosSep($id_cuenta_ingreso,$id_cat_ingresos_ingreso,$monto_ingreso,$comentario_ingreso,$ingreso_fecha){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO ingresos_sep (id_cuenta,id_cat_ingresos,monto,comentario,fecha) VALUES ('".$id_cuenta_ingreso."','".$id_cat_ingresos_ingreso."','".$monto_ingreso."','".$comentario_ingreso."','".$ingreso_fecha."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function insertarIngresosPie($id_cuenta_ingreso,$id_cat_ingresos_ingreso,$monto_ingreso,$comentario_ingreso,$ingreso_fecha){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO ingresos_pie (id_cuenta,id_cat_ingresos,monto,comentario,fecha) VALUES ('".$id_cuenta_ingreso."','".$id_cat_ingresos_ingreso."','".$monto_ingreso."','".$comentario_ingreso."','".$ingreso_fecha."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function contarSep(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT COUNT(id) as cid from ingresos_sep";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $contar = $dado['cid'];
        }

        return $contar;
    }

    public function obtenerDatosIngresosSep(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, i.id_cat_ingresos, `comentario` as c6 ,c.nombre as c1,ci.nombre as c3,cpi.nombre as c2
        FROM `ingresos_sep` i
        INNER JOIN cuentas c
        ON c.id=id_cuenta
        INNER JOIN cat_ingresos ci
        ON i.id_cat_ingresos=ci.id_cat_ingresos
        INNER JOIN cat_padre_ingresos cpi
        ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso
        ORDER BY i.id DESC";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->ingresos2[] = $dado;
        }

        return $this->ingresos2;
    }

    public function contarPie(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT COUNT(id) as cid from ingresos_pie";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $contar = $dado['cid'];
        }

        return $contar;
    }

    public function obtenerDatosIngresosPie(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, i.id_cat_ingresos, `comentario` as c6 ,c.nombre as c1,ci.nombre as c3,cpi.nombre as c2
        FROM `ingresos_pie` i
        INNER JOIN cuentas c
        ON c.id=id_cuenta
        INNER JOIN cat_ingresos ci
        ON i.id_cat_ingresos=ci.id_cat_ingresos
        INNER JOIN cat_padre_ingresos cpi
        ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso
        ORDER BY i.id DESC";   
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->ingresos3[] = $dado;
        }

        return $this->ingresos3;
    }
    
}
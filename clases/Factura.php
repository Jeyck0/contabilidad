<?php
require_once ("Conexion.php");

Class Factura {
    public $facturas;
    public $id_factura;
    public $id_proveedor;
    public $folio;
    public $fecha_emision;
    public $fecha_pago;
    public $tipo;
    public $monto;
    public $detalle;
    public $estado;



    public function Factura(){
        $this->conectar = new Conexion();
        $this->facturas = array();
        

    }
    public function insertarFactura($id_proveedor_f,$folio_f,$fecha_emision_f,$tipo_f,$monto_f,$detalle_f){

        $conectar = $this->conectar->conectar();
        $query ="INSERT INTO facturas (id_proveedor,folio,fecha_emision,tipo,monto,detalle) VALUES ('".$id_proveedor_f."','".$folio_f."','".$fecha_emision_f."','".$tipo_f."','".$monto_f."','".$detalle_f."')";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function obtenerDatosFactura(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT if(estado = 'PAGADA','Pagada','Pagar') as pago,if(estado = 'PAGADA','btn-primary disabled','btn-success') as respuesta,`id_factura`, `id_proveedor`, folio as c1, DATE_FORMAT(fecha_emision, '%d/%m/%Y') as c2, DATE_FORMAT(fecha_pago, '%d/%m/%Y') as fecha_pago, tipo as c3, monto as c4, detalle as c5, estado as c6,p.razon_social as c7,p.rut as c8
        FROM facturas f
        INNER JOIN proveedores p
        ON p.id_proveedores = f.id_proveedor";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->facturas[] = $dado;
        }

        return $this->facturas;
    }

    public function obtenerFacturasPagadas(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT `id_factura`, `id_proveedor`, folio as c1, DATE_FORMAT(fecha_emision, '%d/%m/%Y') as c2, `fecha_pago`, tipo as c3, monto as c4, detalle as c5, estado AS c6,p.razon_social as c7,p.rut as c8
        FROM facturas f
        INNER JOIN proveedores p
        ON p.id_proveedores = f.id_proveedor WHERE estado='PAGADA' AND conegreso='0'";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->facturas[] = $dado;
        }

        return $this->facturas;
    }

    public function obtenerFacturasPagadasEditar(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT `id_factura`, `id_proveedor`, folio as c1, DATE_FORMAT(fecha_emision, '%d/%m/%Y') as c2, DATE_FORMAT(fecha_pago, '%d/%m/%Y') as fecha_pago, tipo as c3, monto as c4, detalle as c5, estado AS c6,p.razon_social as c7,p.rut as c8
        FROM facturas f
        INNER JOIN proveedores p
        ON p.id_proveedores = f.id_proveedor WHERE estado='PAGADA'";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->facturas[] = $dado;
        }

        return $this->facturas;
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

    public function pagarFactura($sid,$sfecha){
        $conectar = $this->conectar->conectar();
        $query_update="UPDATE facturas SET estado = '2',fecha_pago='$sfecha' WHERE id_factura = '".$sid."' ";
        $consultar = mysqli_query($conectar,$query_update);

        return $consultar;
    }

    public function obtenerEstado($eid){
        $conectar = $this->conectar->conectar();
        $query ="SELECT if(estado = 'PAGADA','btn-primary','btn-success') as respuesta FROM facturas where id='$eid'";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->cuentas[] = $dado;
        }

        return $this->cuentas;
    }


    public function aplicarEgreso($fid){
        $conectar = $this->conectar->conectar();
        $query ="UPDATE facturas SET conegreso ='1' where id_factura='$fid'";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

}
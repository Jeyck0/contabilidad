<?php
require_once ("Conexion.php");


Class Proveedor {
    public $id;
    public $nombre;
    public $apellido;
    public $rut;
    public $razon_social;
    public $giro;
    public $direccion;
    public $ciudad;
    public $comuna;
    public $telefono;

    public $proveedores;

    public function Proveedor(){
        $this->conectar = new Conexion();
        $this->proveedores = array();
        

    }
    public function insertarProveedor($nombre_proveedor,$apellido_proveedor,$rut_proveedor,$razon_social_proveedor,$giro_proveedor,$direccion_proveedor,$ciudad_proveedor,$comuna_proveedor,$telefono_proveedor){

        $conectar = $this->conectar->conectar();
        $query =" INSERT INTO proveedores (nombre,apellido,rut,razon_social,giro,direccion,ciudad,comuna,telefono) VALUES ('".$nombre_proveedor."','".$apellido_proveedor."','".$rut_proveedor."','".$razon_social_proveedor."','".$giro_proveedor."','".$direccion_proveedor."','".$ciudad_proveedor."','".$comuna_proveedor."','".$telefono_proveedor."') ";
        $insertar = mysqli_query($conectar,$query);

        return $insertar;
    }

    public function updateProveedor($idp,$rutp,$razonp,$girop){
        $conectar = $this->conectar->conectar();
        $query ="UPDATE proveedores SET rut = '".$rutp."', razon_social = '".$razonp."',giro = '".$girop."' WHERE id_proveedores = '".$idp."' ";
        $consultar = mysqli_query($conectar,$query);

        return $consultar;
    }

    public function obtenerDatosProveedor(){
        $conectar = $this->conectar->conectar();
        $query ="SELECT * FROM proveedores order by razon_social ASC";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->proveedores[] = $dado;
        }

        return $this->proveedores;
    }

    public function obtenerDatosProveedorId($idp){
        $conectar = $this->conectar->conectar();
        $query ="SELECT * FROM proveedores where id_proveedores='$idp' order by razon_social ASC";
        $consultar = mysqli_query($conectar,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            $this->proveedores[] = $dado;
        }

        return $this->proveedores;
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
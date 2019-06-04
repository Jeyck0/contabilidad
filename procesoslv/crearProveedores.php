<?php

require_once ("../claseslv/Conexion.php");
require_once ("../claseslv/Proveedor.php");

if(isset($_POST["crear_proveedor_btn_aceptar"])){

$rut_proveedor_in = $_POST['rut_proveedor_in'];
$nombre_proveedor_in = '';
$apellido_proveedor_in = '';
$razon_social_proveedor_in = $_POST['razon_social_proveedor_in'];
$giro_proveedor_in = $_POST['giro_proveedor_in'];
$direccion_proveedor_in = '';
$ciudad_proveedor_in = '';
$comuna_proveedor_in = '';
$Telefono_proveedor_in = '';

		
}


$proveedor = new Proveedor();
$filasRut = $proveedor->compararProveedor($rut_proveedor_in);

// echo $filasRut;

if($filasRut == 0){
    
    $proveedor->insertarProveedor($nombre_proveedor_in,$apellido_proveedor_in,$rut_proveedor_in,$razon_social_proveedor_in,$giro_proveedor_in,$direccion_proveedor_in,$ciudad_proveedor_in,$comuna_proveedor_in,$Telefono_proveedor_in);
    echo "<script> alert('Proveedor ingresado con exito!') </script>";
    header('refresh:0;url = ../pageslv/verProveedores.php');
    

}else{

    echo "<script> alert('Ya existe un proveedor con el rut ingresado') </script>";
    header('refresh:0;url = ../pageslv/crearProveedores.php');

}




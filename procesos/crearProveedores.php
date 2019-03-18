<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Proveedor.php");

if(isset($_POST["crear_proveedor_btn_aceptar"])){

$nombre_proveedor_in = $_POST['nombre_proveedor_in'];
$apellido_proveedor_in = $_POST['apellido_proveedor_in'];
$rut_proveedor_in = $_POST['rut_proveedor_in'];
$razon_social_proveedor_in = $_POST['razon_social_proveedor_in'];
$giro_proveedor_in = $_POST['giro_proveedor_in'];
$direccion_proveedor_in = $_POST['direccion_proveedor_in'];
$ciudad_proveedor_in = $_POST['cosa'];
$comuna_proveedor_in = $_POST['opt'];
$Telefono_proveedor_in = $_POST['Telefono_proveedor_in'];

		
}





$proveedor = new Proveedor();
$proveedor->insertarProveedor($nombre_proveedor_in,$apellido_proveedor_in,$rut_proveedor_in,$razon_social_proveedor_in,$giro_proveedor_in,$direccion_proveedor_in,$ciudad_proveedor_in,$comuna_proveedor_in,$Telefono_proveedor_in);

header('Location: ../pages/verProveedores.php'); 


<?php

require_once ("../clases/Proveedor.php");

if(isset($_POST['crear_proveedor_btn_aceptar'])){

    $id = $_POST['id'];
    $rut_proveedor_in = $_POST['rut_proveedor_in'];
    $razon_social_proveedor_in = $_POST['razon_social_proveedor_in'];
    $giro_proveedor_in = $_POST['giro_proveedor_in'];


    
    
}

//echo  $id . $rut_proveedor_in .$razon_social_proveedor_in . $giro_proveedor_in;

$proveedor = new Proveedor();
$proveedor->updateProveedor($id,$rut_proveedor_in,$razon_social_proveedor_in,$giro_proveedor_in);




 header('Location: ../pages/verProveedores.php'); 

    
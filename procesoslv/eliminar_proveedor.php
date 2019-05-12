<?php
require_once ('../claseslv/Proveedor.php');


if(isset($_POST['btn-delete'])){
    $id = $_POST['id'];
}

$proveedor = new Proveedor();
$proveedor->eliminarProveedor($id);

header('Location: ../pageslv/verProveedores.php'); 

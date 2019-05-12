<?php
require_once ('../clases/Factura.php');


if(isset($_POST['btn-delete'])){
    $id = $_POST['id'];
}

$factura = new Factura();
$factura->eliminarFactura($id);

header('Location: ../pages/verFacturas.php'); 


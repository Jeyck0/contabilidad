<?php
require_once ('../claseslv/Factura.php');


if(isset($_POST['btn-delete'])){
    $id = $_POST['id'];
}

$factura = new Factura();
$factura->eliminarFactura($id);

header('Location: ../pageslv/verFactura.php'); 


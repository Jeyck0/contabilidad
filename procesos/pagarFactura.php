<?php

require_once ("../clases/Factura.php");

$id=$_GET['id'];

$factura = new Factura();
$factura->pagarFactura($id);


header('Location: ../pages/verFactura.php'); 

    
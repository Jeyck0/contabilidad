<?php

require_once ("../clases/Factura.php");

$id = $_POST['id'];
$pago_factura_dat = $_POST['pago_factura_dat'];



$factura = new Factura();
$factura->pagarFactura($id,$pago_factura_dat);


header('Location: ../pages/verFactura.php'); 

    
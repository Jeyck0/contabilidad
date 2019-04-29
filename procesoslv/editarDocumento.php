<?php
require_once ("../claseslv/Factura.php");

$factura = new Factura();


if(isset($_POST['crear_factura_btn_aceptar'])){

$id = $_POST['id'];

$folio_factura_in = $_POST['folio_factura_in'];
$select_proveedor_facturas = $_POST['select_proveedor_facturas'];
$emision_factura_dat = $_POST['emision_factura_dat'];
$select_tipo_facturas = $_POST['select_tipo_facturas'];
$monto_factura_in = $_POST['monto_factura_in'];
$detalle_factura_txt = $_POST['detalle_factura_txt'];
}

$factura->editarFactura($select_proveedor_facturas,$folio_factura_in,$emision_factura_dat,$select_tipo_facturas,$monto_factura_in,$detalle_factura_txt,$id);

header('Location: ../pageslv/verFactura.php'); 

<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Factura.php");

if(isset($_POST["crear_factura_btn_aceptar"])){

$folio_factura_in = $_POST['folio_factura_in'];
$select_proveedor_facturas = $_POST['select_proveedor_facturas'];
$emision_factura_dat = $_POST['emision_factura_dat'];
$select_tipo_facturas = $_POST['select_tipo_facturas'];
$monto_factura_in = $_POST['monto_factura_in'];
$detalle_factura_txt = $_POST['detalle_factura_txt'];

		
}


echo $select_proveedor_facturas." " ;
echo $folio_factura_in." " ;
echo $emision_factura_dat." " ;
echo $select_tipo_facturas." " ;
echo $monto_factura_in." " ;
echo $detalle_factura_txt." " ;






$factura = new Factura();
$factura->insertarFactura($select_proveedor_facturas,$folio_factura_in,$emision_factura_dat,$select_tipo_facturas,$monto_factura_in,$detalle_factura_txt);

header('Location: ../pages/verFactura.php'); 


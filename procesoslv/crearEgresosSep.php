<?php

require_once ("../claseslv/Egreso.php");
require_once ("../claseslv/Factura.php");

if(isset($_POST["crear_egreso_btn_aceptar"])){

$select_cuenta_egresos = $_POST['select_cuenta_egresos'];
$select_cat_egresos_padre = $_POST['select_cat_egresos_padre'];
$select_cat_egresos = $_POST['select_cat_egresos'];
$select_factura_egreso = $_POST['select_factura_egreso'];

		
}


echo $select_cuenta_egresos;


$egreso = new Egreso();
$egreso->insertarEgresosSep($select_cuenta_egresos,$select_cat_egresos,$select_factura_egreso);

$factura = new Factura();
$factura->aplicarEgreso($select_factura_egreso);



header('Location: ../pageslv/verEgresos.php'); 


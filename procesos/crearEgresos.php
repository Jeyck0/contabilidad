<?php

require_once ("../clases/Egreso.php");
require_once ("../clases/Factura.php");

if(isset($_POST["crear_egreso_btn_aceptar"])){

$select_cuenta_egresos = $_POST['select_cuenta_egresos'];
$select_cat_egresos_padre = $_POST['select_cat_egresos_padre'];
$select_cat_egresos = $_POST['select_cat_egresos'];
$select_factura_egreso = $_POST['select_factura_egreso'];

		
}


echo $select_factura_egreso ;


$egreso = new Egreso();
$egreso->insertarEgresos($select_cuenta_egresos,$select_cat_egresos,$select_factura_egreso);

$factura = new Factura();
$factura->aplicarEgreso($select_factura_egreso);



header('Location: ../pages/verEgresos.php'); 


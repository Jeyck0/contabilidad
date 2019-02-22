<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Egreso.php");

if(isset($_POST["crear_egreso_btn_aceptar"])){

$select_cuenta_egresos = $_POST['select_cuenta_egresos'];
$select_cat_egresos = $_POST['select_cat_egresos'];
$monto_egreso_in = $_POST['monto_egreso_in'];
$comentario_egreso_txt = $_POST['comentario_egreso_txt'];

		
}





$egreso = new Egreso();
$egreso->insertarEgresos($select_cuenta_egresos,$select_cat_egresos,$monto_egreso_in,$comentario_egreso_txt);
$egreso->restar($select_cuenta_egresos,$monto_egreso_in);

header('Location: ../pages/verEgresos.php'); 


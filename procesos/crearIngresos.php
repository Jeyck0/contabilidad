<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Ingreso.php");

if(isset($_POST["crear_ingreso_btn_aceptar"])){

$select_cuenta_ingresos = $_POST['select_cuenta_ingresos'];
$select_cat_ingresos = $_POST['select_cat_ingresos'];
$monto_ingreso_in = $_POST['monto_ingreso_in'];
$comentario_ingreso_txt = $_POST['comentario_ingreso_txt'];

		
}





$ingreso = new Ingreso();
$ingreso->insertarIngresos($select_cuenta_ingresos,$select_cat_ingresos,$monto_ingreso_in,$comentario_ingreso_txt);
$ingreso->sumar($select_cuenta_ingresos,$monto_ingreso_in);

header('Location: ../pages/verIngresos.php'); 
<?php

require_once ("../claseslv/Conexion.php");
require_once ("../claseslv/Ingreso.php");

if(isset($_POST["crear_ingreso_btn_aceptar"])){

$select_cuenta_ingresos = $_POST['select_cuenta_ingresos'];
$select_cat_ingresos = $_POST['select_cat_ingresos'];
$monto_ingreso_in = $_POST['monto_ingreso_in'];
$comentario_ingreso_txt = $_POST['comentario_ingreso_txt'];
$fecha_ingreso = $_POST['fecha_ingreso']; 

		
}


// echo $select_cuenta_ingresos;
// echo $select_cat_ingresos;
// echo $monto_ingreso_in;
// echo $comentario_ingreso_txt;
// echo $fecha_ingreso;




$ingreso = new Ingreso();
$ingreso->insertarIngresosPie($select_cuenta_ingresos,$select_cat_ingresos,$monto_ingreso_in,$comentario_ingreso_txt,$fecha_ingreso);
$ingreso->sumar($select_cuenta_ingresos,$monto_ingreso_in);


 header('Location: ../pageslv/verIngresos.php'); 
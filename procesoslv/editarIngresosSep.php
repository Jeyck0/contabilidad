<?php

require_once ("../claseslv/Ingreso.php");

if(isset($_POST['crear_ingreso_btn_aceptar'])){

    $id = $_POST['id'];
    
    $select_cuenta_ingresos = 1;
    $select_cat_ingresos = $_POST['select_cat_ingresos'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $monto_ingreso_in = $_POST['monto_ingreso_in'];
    $comentario_ingreso_txt = $_POST['comentario_ingreso_txt'];
}
// echo $id;
// echo $select_cat_ingresos;
// var_dump ($fecha_ingreso);
// echo $monto_ingreso_in;
// echo $comentario_ingreso_txt;

$ingreso = new Ingreso();
$ingreso->updateIngresoSep($id,$select_cuenta_ingresos,$select_cat_ingresos,$fecha_ingreso,$monto_ingreso_in,$comentario_ingreso_txt);




header('Location: ../pageslv/verIngresos.php'); 

    
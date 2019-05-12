<?php

require_once ("../claseslv/Egreso.php");

if(isset($_POST['crear_egreso_btn_aceptar'])){

    $id = $_POST['id'];
    
    $select_cuenta_egresos = 3;
    $select_cat_egresos = $_POST['select_cat_egresos'];
    $select_factura_egreso = $_POST['select_factura_egreso'];
}

$egreso = new Egreso();
$egreso->updateEgresoPie($id,$select_cuenta_egresos,$select_cat_egresos,$select_factura_egreso);


// echo $id;
// echo $select_cuenta_egresos;
// echo $select_cat_egresos;
// echo $select_factura_egreso;

header('Location: ../pageslv/verEgresos.php'); 

    
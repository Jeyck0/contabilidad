<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/CatEgresos.php");

if(isset($_POST["crear_cat_egresos_btn_aceptar"])){ 

$codigo_cat_egresos = $_POST['codigo_cat_egresos_in'];
$nombre_cat_egresos = $_POST['nombre_cat_egresos_in'];


		
}





$catEgresos = new CatEgresos();
$catEgresos->insertarCatEgresos($codigo_cat_egresos,$nombre_cat_egresos);
header('Location: ../pages/verCategoriaEgresos.php'); 


<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/CatIngresos.php");

if(isset($_POST["crear_cat_ingresos_btn_aceptar"])){

$codigo_cat_ingresos = $_POST['codigo_cat_ingresos_in'];
$nombre_cat_ingresos = $_POST['nombre_cat_ingresos_in'];


		
}





$catIngresos = new CatIngresos();
$catIngresos->insertarCatIngresos($codigo_cat_ingresos,$nombre_cat_ingresos);
header('Location: ../pages/verCategoriaIngresos.php'); 


<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");

if(isset($_POST["editar_cuenta_btn_aceptar"])){

$nombre = $_POST['nombre_cuenta_in'];
$capital = $_POST['monto_cuenta_in'];
$id_cuenta = $_POST['id_cuenta'];

		
}





$cuenta = new Cuenta();
$cuenta->actualizarDatosCuenta($nombre,$capital,$id_cuenta);
header('Location: ../pages/verCuentas.php'); 



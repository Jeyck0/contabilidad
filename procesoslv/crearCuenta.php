<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");

if(isset($_POST["crear_cuenta_btn_aceptar"])){

$numero_cuenta = $_POST['numero_cuenta_in'];
$nombre_cuenta = $_POST['nombre_cuenta_in'];
$monto_cuenta = $_POST['monto_cuenta_in'];

		
}





$cuenta = new Cuenta();
$cuenta->insertarCuenta($nombre_cuenta,$monto_cuenta);
header('Location: ../pages/verCuentas.php'); 


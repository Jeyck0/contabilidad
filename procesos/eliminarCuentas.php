<?php
require_once ("../clases/Cuenta.php");

$id_cuenta=$_GET['id'];

$cuenta = new Cuenta();
$cuenta->eliminarCuenta($id_cuenta);

header('Location: ../pages/verCuentas.php'); 

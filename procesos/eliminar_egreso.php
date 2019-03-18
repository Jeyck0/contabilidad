<?php
require_once ('../clases/Egreso.php');


if(isset($_POST['btn-delete'])){
    $id = $_POST['id'];
}

$egreso = new Egreso();
$egreso->eliminarEgreso($id);

header('Location: ../pages/verEgresos.php'); 


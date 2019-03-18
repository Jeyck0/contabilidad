<?php

require_once ('../clases/Conexion.php');

$conexion = new Conexion();
$cnn =$conexion->conectar();


$radio_id = $_POST["radio_id"];


$query ="select * from facturas where id_factura = '$radio_id' ";   
$consultar = mysqli_query($cnn,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            echo "<option value='".$dado['id_factura']."'>".$dado['folio'] ." </option>  ";
        }



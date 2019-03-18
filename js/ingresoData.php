<?php

require_once ('../clases/Conexion.php');

$conexion = new Conexion();
$cnn =$conexion->conectar();


$id_padre = $_POST["padre_id"];


$query ="select id_cat_ingresos,nombre,codigo from cat_ingresos where id_cat_padre_ingresos = '$id_padre' order by codigo ASC";   
$consultar = mysqli_query($cnn,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            echo "<option value='".$dado['id_cat_ingresos']."' >".$dado['codigo'] ."  | ". $dado['nombre']. " </option>  ";
        }

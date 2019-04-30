<?php

require_once ('../claseslv/Conexion.php');


$conexion = new Conexion();
$cnn =$conexion->conectar();


$id_padre = $_POST["padre_id"];


$query ="select id_cat_egreso,nombre,codigo from cat_egresos where id_cat_padre_egresos = '$id_padre' order by codigo ASC";   
$consultar = mysqli_query($cnn,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            echo "<option value='".$dado['id_cat_egreso']."' >".$dado['codigo'] ."  | ". $dado['nombre']. " </option>  ";
        }



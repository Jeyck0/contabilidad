<?php

require_once ('../claseslv/Conexion.php');

$conexion = new Conexion();
$cnn =$conexion->conectar();


$id_padre = $_POST["padre_id"];


$query ="SELECT id_cat_ingresos,nombre,codigo FROM cat_ingresos WHERE id_cat_padre_ingresos = '$id_padre' ORDER BY codigo ASC";   
$consultar = mysqli_query($cnn,$query);

        while($dado = mysqli_fetch_assoc($consultar)){
            echo "<option value='".$dado['id_cat_ingresos']."' >".$dado['codigo'] ."  | ". $dado['nombre']. " </option>  ";
        }

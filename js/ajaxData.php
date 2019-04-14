<?php

require_once ('../clases/Conexion.php');
header ('Access-Control-Allow-Origin: * ');



//$id_padre = $_GET["padre_id"];

function arraysql($id){
    $conexion = new Conexion();
    $cnn =$conexion->conectar();

    $query ="select id_cat_egreso,nombre,codigo from cat_egresos where id_cat_padre_egresos = '$id' order by codigo ASC";   
    $consultar = mysqli_query($cnn,$query);
    $i = 0;

        while($dado = mysqli_fetch_array($consultar)){
            $dadoData[$i]= $dado;
            $i++;
        }

        return $dadoData;
}

$jsonArray = arraysql(3);
echo json_encode($jsonArray);



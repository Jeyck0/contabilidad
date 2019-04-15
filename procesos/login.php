<?php
require_once ("../clases/Usuario.php");

$conexion = new Conexion();
$conexion->conectar();
session_start();


if(isset($_POST["btn_login"])){

$usuario_in = $_POST['usuario_in'];
$password_in= sha1($_POST['password_in']);
$select_colegio = $_POST['select_colegio'];

}

$usuario = new Usuario();
$datos = $usuario->obtenerDatosUsuario($usuario_in,$password_in);

for($i=0;$i<sizeof($datos);$i++){
    $usuario_respuesta = $datos[$i]['nombre_usuario'];
    $password_respuesta = $datos[$i]['password'];
    $permisos_maux = $datos[$i]['maux'];
    $permisos_lv = $datos[$i]['lv'];
    
} 

if($usuario_in == $usuario_respuesta && $password_in == $password_respuesta){
    if($select_colegio == 1 ){
        if($permisos_maux ==1){
            header("Location:../pages/index.php");
        }
        else{
            echo "su cuenta no tiene acceso al sistema";
        }
        
    }
    else if($select_colegio == 2){
        if($permisos_lv ==1){
            header("Location:../pages_lv/index.php");
        }
        else{
            echo "su cuenta no tiene acceso al sistema";
        }

    }


    
    
}

else{
    echo "error";
    // header("Location:../pages/error_login.php");
    // echo $rut_in;
}


// $_SESSION['s_id'] = $rut_in;


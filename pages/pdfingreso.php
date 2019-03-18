<?php
include ("../mpdf/mpdf.php");
include_once ("../clases/Conexion.php");
include_once ("../clases/Egreso.php");

$id = $_GET['id'];

$html='
<style>
.numero{
    padding-top:150px;
    padding-left:560px;
    font-size:25px;

    
}

.fecha{
    padding-top:28px;
    padding-left:500px;
    font-size:25px;

}
.paguese{

    padding-top:59px;
    padding-left:150px;
    
}

.lasumade{

    padding-top:12px;
    padding-left:150px;
    
}

.cpadre{

    padding-top:95px;
    padding-left:0px;
    
    
}

.chijo{

    padding-top:-18px;
    padding-left:65px;
    
    
}


.descripcion{

    padding-top:-18px;
    padding-left:130px;

    
    
}

.debe{

    padding-top:-18px;
    padding-left:470px;
    
    
    
}

.descripcionh{

    padding-top:10px;
    padding-left:130px;

    
    
}


.haber{

    padding-top:-20px;
    padding-left:350 px;
    
    
    
}

.glosa{

    padding-top:-47px;
    padding-left:555px;
    
    
    
}
</style>

';




function tabla($s_id){
	$conexion = new Conexion();
    $conectar =$conexion->conectar();

	$query ="SELECT i.id as c0, `monto`as c4, `id_cuenta`, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, i.id_cat_ingresos, `comentario` as c6 ,c.nombre as c1,ci.nombre as c3,ci.codigo as cod2,cpi.codigo as cod1,cpi.nombre as c2
    FROM `ingresos` i
    INNER JOIN cuentas c
    ON c.id=id_cuenta
    INNER JOIN cat_ingresos ci
    ON i.id_cat_ingresos=ci.id_cat_ingresos
    INNER JOIN cat_padre_ingresos cpi
    ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso
    WHERE i.id='$s_id'
    ORDER BY i.id ASC";

    $consultar = mysqli_query($conectar,$query);

    $tabla="";

	while($row=$consultar->fetch_assoc()){
        $tabla.='<div class="numero">'.$row['c0'].'</div>';
        $tabla.='<div class="fecha">'.$row['c5'].'</div>';
        $tabla.='<div class="paguese">Corporación Ed. San Ignacio de Los Rios.</div>';
        $tabla.='<div class="lasumade">65.149.163 - 0</div>';
        $tabla.='<div class="cpadre">'.$row['cod1'].'</div>';
        $tabla.='<div class="chijo">'.$row['cod2'].'</div>';
        $tabla.='<div class="descripcion">'.$row['c3'].'</div>';
        $tabla.='<div class="debe">'.number_format($row['c4'], 0, "", ".").'</div>';
        $tabla.='<div class="descripcionh">'.$row['c1'].'</div>';
        $tabla.='<div class="haber">'.number_format($row['c4'], 0, "", ".").'</div>';
        $tabla.='<div class="glosa">'.$row['c6'].'</div>';
	}

	return $tabla;
}










$html.=(tabla($id));

$mpdf = new mPDF('c','A4');
$mpdf->SetImportUse();
$mpdf->SetDocTemplate('../images/comprobante_ingreso.pdf',true);
$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
$mpdf->allow_charset_conversion=true;
$mpdf->charset_in='UTF-8';
$mpdf->writeHTML($html);

$mpdf->Output('planilla.pdf','I');

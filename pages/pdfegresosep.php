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

    padding-top:60px;
    padding-left:100px;
    
}

.lasumade{

    padding-top:12px;
    padding-left:100px;
    
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
    width:200px;
    font-size:13px;

    
    
}

.debe{

    padding-top:-18px;
    padding-left:350px;
    vertical-align: top;
    
    
    
}

.descripcionh{

    padding-top:10px;
    padding-left:130px;
    font-size:13px;

    
    
}


.haber{

    padding-top:-18px;
    padding-left:470 px;
    
    
    
}

.glosa{

    padding-top:-50px;
    padding-left:555px;
    font-size:13px;
    
    
    
}
</style>

';




function tabla($s_id){
	$conexion = new Conexion();
    $conectar =$conexion->conectar();

	$query ="SELECT e.id_egreso as m0, `id_cuenta`, e.id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y') as fecha ,c.nombre as m1,subcat.nombre as m3,subcat.codigo as cod2,catp.codigo as cod1,catp.nombre as m2,f.folio as m5,f.fecha_emision as m6,DATE_FORMAT(fecha_pago, '%d/%m/%Y') as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
        FROM `egresos_sep` e 
        INNER JOIN cuentas c 
        ON e.id_cuenta = c.id 
        INNER JOIN cat_egresos subcat
        ON subcat.id_cat_egreso= e.id_cat_egresos
        INNER JOIN cat_padre_egresos catp
        ON subcat.id_cat_padre_egresos = catp.id_padre_egreso
        INNER JOIN facturas f
        ON f.id_factura=e.id_factura
        INNER JOIN proveedores p
        ON f.id_proveedor = p.id_proveedores WHERE e.id_egreso='$s_id' ORDER BY e.id_egreso ASC";

    $consultar = mysqli_query($conectar,$query);

    $tabla="";

	while($row=$consultar->fetch_assoc()){
        $tabla.='<div class="numero">'.$row['m0'].'</div>';
        $tabla.='<div class="fecha">'.$row['m7'].'</div>';
        $tabla.='<div class="paguese">'.$row['m10'].'</div>';
        $tabla.='<div class="lasumade">'.'$ '.number_format($row['m11'], 0, "", ".").'</div>';
        $tabla.='<div class="cpadre">'.$row['cod1'].'</div>';
        $tabla.='<div class="chijo">'.$row['cod2'].'</div>';
        $tabla.='<div class="descripcion">'.$row['m3'].'</div>';
        $tabla.='<div class="debe">'.number_format($row['m11'], 0, "", ".").'</div>';
        $tabla.='<div class="descripcionh">'.$row['m1'].'</div>';
        $tabla.='<div class="haber">'.number_format($row['m11'], 0, "", ".").'</div>';
        $tabla.='<div class="glosa">'.$row['m8'].'</div>';
	}

	return $tabla;
}










$html.=(tabla($id));

$mpdf = new mPDF('c','A4');
$mpdf->SetImportUse();
$mpdf->SetDocTemplate('../images/comprobante_egreso8.pdf',true);
$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
$mpdf->allow_charset_conversion=true;
$mpdf->charset_in='UTF-8';
$mpdf->writeHTML($html);

$mpdf->Output('planilla.pdf','I');

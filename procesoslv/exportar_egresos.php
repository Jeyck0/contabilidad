<?php
require_once ('../clases/Conexion.php');
require_once ('../phpexcel/PHPExcel.php');

if(isset($_POST['generar_reporte'])){   
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_termino = $_POST['fecha_termino'];


}
$conexion = new Conexion();
$cnn = $conexion->conectar();


$sql="SELECT e.id as m0, `id_cuenta`, e.id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y'),c.nombre as m1,subcat.nombre as m3,subcat.codigo as cod1,catp.codigo as cod2,catp.nombre as m2,f.folio as m5,DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') as m6,DATE_FORMAT(f.fecha_pago, '%d/%m/%Y')as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
FROM `egresos` e 
INNER JOIN cuentas c 
ON e.id_cuenta = c.id 
INNER JOIN cat_egresos subcat
ON subcat.id_cat_egreso= e.id_cat_egresos
INNER JOIN cat_padre_egresos catp
ON subcat.id_cat_padre_egresos = catp.id_padre_egreso
INNER JOIN facturas f
ON f.id_factura=e.id_factura
INNER JOIN proveedores p
ON f.id_proveedor = p.id_proveedores
WHERE fecha BETWEEN '$fecha_inicio' AND '$fecha_termino'
ORDER BY e.id DESC";

$consultar = mysqli_query($cnn,$sql);


$fila=2;
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()
->setCreator("Maux")
->setLastModifiedBy("Maux")
->setTitle("Egresos");

$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'RBD')
->setCellValue('B1', 'CTA_BANCO')
->setCellValue('C1', 'COD_CTA_1')
->setCellValue('D1', 'COD_CTA_2')
->setCellValue('E1', 'TIPO_DOC')
->setCellValue('F1', 'NRO_DOC')
->setCellValue('G1', 'F_EMISION')
->setCellValue('H1', 'F_PAGO')
->setCellValue('I1', 'GLOSA')
->setCellValue('J1', 'RUT')
->setCellValue('K1', 'RAZON SOCIAL')
->setCellValue('L1', 'MONTO');


while($row=$consultar->fetch_assoc()){
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, "6832");
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['m1']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['cod2']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['cod1']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['m4']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['m5']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['m6']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['m7']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row['m8']);
    $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $row['m9']);
    $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $row['m10']);
    $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $row['m11']);

    $fila++;
}

$sql="SELECT e.id_egreso as m0, `id_cuenta`, e.id_cat_egresos, e.id_factura, DATE_FORMAT(fecha, '%d/%m/%Y'),c.nombre as m1,subcat.nombre as m3,subcat.codigo as cod1,catp.codigo as cod2,catp.nombre as m2,f.folio as m5,DATE_FORMAT(f.fecha_emision, '%d/%m/%Y') as m6,DATE_FORMAT(f.fecha_pago, '%d/%m/%Y')as m7,f.tipo as m4,f.monto as m11,f.detalle as m8,p.rut as m9,p.razon_social as m10
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
ON f.id_proveedor = p.id_proveedores
WHERE fecha BETWEEN '$fecha_inicio' AND '$fecha_termino'
ORDER BY e.id_egreso DESC";

$consultar = mysqli_query($cnn,$sql);

while($row=$consultar->fetch_assoc()){
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, "6832");
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['m1']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['cod2']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['cod1']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['m4']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['m5']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['m6']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['m7']);
    $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row['m8']);
    $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $row['m9']);
    $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $row['m10']);
    $objPHPExcel->getActiveSheet()->setCellValue('L'.$fila, $row['m11']);

    $fila++;
}

$objPHPExcel->getActiveSheet()->setTitle('Egresos'); 
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename=egreso.xlsx');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;





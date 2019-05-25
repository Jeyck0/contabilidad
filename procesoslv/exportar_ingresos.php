<?php
require_once ('../claseslv/Conexion.php');
require_once ('../phpexcel/PHPExcel.php');

if(isset($_POST['generar_reporte'])){   
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_termino = $_POST['fecha_termino'];


}
$conexion = new Conexion();
$cnn = $conexion->conectar();


$sql="SELECT i.id as c0, `monto`as c4, `id_cuenta`, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, i.id_cat_ingresos, `comentario` as c6 ,c.nombre as c1,ci.codigo as c3,cpi.codigo as c2
FROM `ingresos` i
INNER JOIN cuentas c
ON c.id=id_cuenta
INNER JOIN cat_ingresos ci
ON i.id_cat_ingresos=ci.id_cat_ingresos
INNER JOIN cat_padre_ingresos cpi
ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso
WHERE i.fecha BETWEEN '$fecha_inicio' AND '$fecha_termino'
ORDER BY i.id DESC
";

$consultar = mysqli_query($cnn,$sql);


$fila=2;
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()
->setCreator("Maux")
->setLastModifiedBy("Maux")
->setTitle("Ingresos");

$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1', 'RBD')
->setCellValue('B1', 'CTA_BANCO')
->setCellValue('C1', 'COD_CTA_1')
->setCellValue('D1', 'COD_CTA_2')
->setCellValue('E1', 'FECHA')
->setCellValue('F1', 'GLOSA')
->setCellValue('G1', 'MONTO')
->setCellValue('H1', 'RUT');


while($row=$consultar->fetch_assoc()){
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, "22226-7");
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['c1']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['c2']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['c3']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['c5']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['c6']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['c4']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, "70.083.600-2");


    $fila++;
}

$sql="SELECT i.id as c0, `monto`as c4, `id_cuenta`, DATE_FORMAT(fecha, '%d/%m/%Y') as c5, i.id_cat_ingresos, `comentario` as c6 ,c.nombre as c1,ci.codigo as c3,cpi.codigo as c2
FROM `ingresos_sep` i
INNER JOIN cuentas c
ON c.id=id_cuenta
INNER JOIN cat_ingresos ci
ON i.id_cat_ingresos=ci.id_cat_ingresos
INNER JOIN cat_padre_ingresos cpi
ON ci.id_cat_padre_ingresos = cpi.id_padre_ingreso
WHERE i.fecha BETWEEN '$fecha_inicio' AND '$fecha_termino'
ORDER BY i.id DESC
";


$consultar = mysqli_query($cnn,$sql);

while($row=$consultar->fetch_assoc()){
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, "22226-7");
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['c1']);
    $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['c2']);
    $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['c3']);
    $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['c5']);
    $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['c6']);
    $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['c4']);
    $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, "70.083.600-2");

    $fila++;
}

$objPHPExcel->getActiveSheet()->setTitle('Ingresos'); 
$objPHPExcel->setActiveSheetIndex(0);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename=Ingreso.xlsx');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;





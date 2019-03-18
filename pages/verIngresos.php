<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");
require_once ("../clases/CatIngresos.php");
require_once ("../clases/Ingreso.php");



$ingresos = new Ingreso();
$datos = $ingresos->obtenerDatosIngresos();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de Ingresos</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>RBD</th>
                                <th>Nombre de la institución</th>
                                <th>Subvencion</th>
                                <th>Cuenta</th>
                                <th>Sub Cuenta</th>
                                <th>Monto</th>
                                <th>Fecha Emisión</th>
                                <th>Detalle</th>
                                <th>Descargar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos);$i++){?>
                            <tr>
                                <th><?php echo $datos[$i]["c0"]; ?></th>
                                <th>7004</th>
                                <th>Corporacion Educacional San Ignacio de Los Rios</th>
                                <th><?php echo $datos[$i]["c1"]; ?></th>
                                <th><?php echo $datos[$i]["c2"]; ?></th>
                                <th><?php echo $datos[$i]["c3"]; ?></th>
                                <th><?php echo $datos[$i]["c4"]; ?></th>
                                <th><?php echo $datos[$i]["c5"]; ?></th>
                                <th><?php echo $datos[$i]["c6"]; ?></th>
                                <th><a href="pdfingreso.php?id=<?php echo $datos[$i]["c0"]; ?>" type="submit" name="descargar"><i class="fa-cloud-download">Descargar</i></a></th>
                            </tr>
                        <?php }?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php");?>
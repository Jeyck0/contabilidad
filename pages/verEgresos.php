<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");
require_once ("../clases/CatEgresos.php");
require_once ("../clases/Egreso.php");


$cuentas = new Cuenta();
$datos = $cuentas->obtenerDatosCuenta();

$egresos = new Egreso();
$datos2 = $egresos->obtenerDatosEgresos();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de Egresos</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cuenta</th>
                                <th>Categoria</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Glosa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos2);$i++){?>
                            <tr>
                                <th><?php echo $datos2[$i]["id"]; ?></th>
                                <th><?php echo $datos2[$i]["cnombre"]; ?></th>
                                <th><?php echo $datos2[$i]["nombre"]; ?></th>
                                <th><?php echo $datos2[$i]["monto"]; ?></th>
                                <th><?php echo $datos2[$i]["fecha"]; ?></th>
                                <th><?php echo $datos2[$i]["comentario"]; ?></th>
                                <th></th>
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
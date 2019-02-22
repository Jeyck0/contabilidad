<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");


$cuentas = new Cuenta();
$datos = $cuentas->obtenerDatosCuenta();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de cuentas</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Cuenta</th>
                                <th>Monto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos);$i++){?>
                            <tr>
                                <th><?php echo $datos[$i]["id"]; ?></th>
                                <th><?php echo $datos[$i]["nombre"]; ?></th>
                                <th><?php echo $datos[$i]["capital"]; ?></th>
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
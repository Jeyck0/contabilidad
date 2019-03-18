<?php
require_once ("../clases/Proveedor.php");


$proveedor = new Proveedor();
$datos = $proveedor->obtenerDatosProveedor();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de Proveedores</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>Rut</th>
                                <th>Razón Social</th>
                                <th>Giro</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<sizeof($datos);$i++){?>
                            <tr>
                                <th>
                                    <?php echo $datos[$i]["rut"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["razon_social"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["giro"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["direccion"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["telefono"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["comuna"]; ?>
                                </th>
                                <th>

                                    
                                    <a href="editarCuentas.php?id=<?php echo $datos[$i]["id"]; ?>" class="btn btn-xs btn-warning">Editar</a>
                                    <a href="" class="btn btn-xs btn-danger">Eliminar</a>
                                   
                                </th>
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
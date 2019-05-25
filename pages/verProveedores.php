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
                    <table class="table display dataTable" id="tabla_proveedores" style="width:100%">
                        <thead>
                            <tr>
                                <th>Rut</th>
                                <th>Razón Social</th>
                                <th>Giro</th>
                                <th>Acciones</th>
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

                                    
                                    <a href="editarProveedor.php?id=<?php echo $datos[$i]["id_proveedores"]; ?>" class="btn btn-xs btn-warning">Editar</a>
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
<script>
$(document).ready( function () {
    $('#tabla_proveedores').DataTable();
} );
</script>
<?php
require_once ("../claseslv/Proveedor.php");


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
                                    <a href="" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $datos[$i]["id_proveedores"]; ?>" >Eliminar</a>
                                    
                                   
                                </th>
                                <div id="myModal<?php echo $datos[$i]["id_proveedores"]; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Contenido del modal -->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h1 class="card-title"> ¿Desea eliminar este registro ? </h1> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                
                                    </div>
                                    <div class="modal-footer">
                                    <form action="../procesoslv/eliminar_proveedor.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $datos[$i]["id_proveedores"]; ?>">
                                                <button type="submit" name="btn-delete" class="btn btn-success">Si</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                            </form>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
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
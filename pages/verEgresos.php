<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/CatEgresos.php");
require_once ("../clases/Egreso.php");



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
                                <th>Descargar Egreso</th>
                                <th>Acciones</th>
                                <th>Detalle</th>
                                <th>Razón Social</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos2);$i++){?>
                            <tr>
                                <th><?php echo $datos2[$i]["m0"]; ?></th>
                                <th><a href="pdfegreso.php?id=<?php echo $datos2[$i]["m0"]; ?>" type="submit" name="descargar"><i class="fa-cloud-download">Descargar</i></a></th>
                                <th>
                                    <a href="editarEgreso.php?id=<?php echo $datos2[$i]["m0"]; ?>" class="btn btn-xs btn-warning">Editar</a>
                                    <a href="" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $datos2[$i]["m0"]; ?>" >Eliminar</a>
                                </th>
                                <th><?php echo $datos2[$i]["m8"]; ?></th>
                                <th><?php echo $datos2[$i]["m10"]; ?></th>
                                <th><?php echo $datos2[$i]["m11"]; ?></th>
                                <!-- Modal -->
                                <div id="myModal<?php echo $datos2[$i]["m0"]; ?>" class="modal fade" role="dialog">
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
                                    <form action="../procesos/eliminar_egreso.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $datos2[$i]["m0"]; ?>">
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
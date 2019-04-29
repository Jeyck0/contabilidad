<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/CatEgresos.php");
require_once ("../clases/Egreso.php");



$egresos = new Egreso();
$datos2 = $egresos->obtenerDatosEgresos();
$datos3 = $egresos->obtenerDatosEgresosSep();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de Egresos</h4>
                <select class="form-control" name="select_cuenta" id="select_cuenta">
                    <option value="1">SEP</option>
                    <option value="2" selected>General</option>
                </select>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered"   id="t-general">
                        <caption>Egresos General</caption>
                        <thead>
                            <tr>
                                <th>#</th>
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
                                <th>
                                    <a href="pdfegreso.php?id=<?php echo $datos2[$i]["m0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-success">Descargar PDF</a>
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
                    <table class="table table-striped table-bordered" id="t-sep" >
                    <caption>Egresos SEP</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Acciones</th>
                                <th>Detalle</th>
                                <th>Razón Social</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos3);$i++){?>
                            <tr>
                                <th><?php echo $datos3[$i]["m0"]; ?></th>
                                <th>
                                    <a href="pdfegresosep.php?id=<?php echo $datos3[$i]["m0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-success">Descargar PDF</a>
                                    <a href="editarEgreso.php?id=<?php echo $datos3[$i]["m0"]; ?>" class="btn btn-xs btn-warning">Editar</a>
                                    <a href="" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $datos3[$i]["m0"]; ?>" >Eliminar</a>
                                </th>
                                <th><?php echo $datos3[$i]["m8"]; ?></th>
                                <th><?php echo $datos3[$i]["m10"]; ?></th>
                                <th><?php echo $datos3[$i]["m11"]; ?></th>
                                <!-- Modal -->
                                <div id="myModal<?php echo $datos3[$i]["m0"]; ?>" class="modal fade" role="dialog">
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
                                                        <input type="hidden" name="id" value="<?php echo $datos3[$i]["m0"]; ?>">
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
<script>
    $(function(){
        $("#t-sep").hide();
        $("#t-general").show();
        $("#select_cuenta").on('change',function(){
            if($("#select_cuenta").val()==1){

                $("#t-sep").show();
                $("#t-general").hide();

                
            }
            else{

                $("#t-sep").hide();
                $("#t-general").show();
            }
            
        })
    })
</script>
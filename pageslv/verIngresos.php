<?php

require_once ("../claseslv/Cuenta.php");
require_once ("../claseslv/CatIngresos.php");
require_once ("../claseslv/Ingreso.php");



$ingresos = new Ingreso();
$datos = $ingresos->obtenerDatosIngresos();
$datos2 = $ingresos->obtenerDatosIngresosSep();
$datos3 = $ingresos->obtenerDatosIngresosPie();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de Ingresos</h4>
                <select class="form-control" name="select_cuenta" id="select_cuenta">
                    <option value="1">SEP</option>
                    <option value="2" selected>General</option>
                    <option value="3">PIE</option>
                </select>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="t-general">
                    <caption>Ingresos General</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Acciones</th>
                                <th>Detalle</th>
                                <th>Monto</th>
                                <th>Cuenta</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos);$i++){?>
                            <tr>
                                <th><?php echo $datos[$i]["c0"]; ?></th>
                                <th><a href="pdfingreso.php?id=<?php echo $datos[$i]["c0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-success">Descargar PDF</a>
                                <a href="editarIngreso.php?id=<?php echo $datos[$i]["c0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-warning">Editar</a>
                                </th>
                                <th><?php echo $datos[$i]["c6"]; ?></th>
                                <th><?php echo $datos[$i]["c4"]; ?></th>
                                <th><?php echo $datos[$i]["c1"]; ?></th>
                            </tr>
                        <?php }?>    
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered" id="t-sep">
                    <caption>Ingresos SEP</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Acciones</th>
                                <th>Detalle</th>
                                <th>Monto</th>
                                <th>Cuenta</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos2);$i++){?>
                            <tr>
                                <th><?php echo $datos2[$i]["c0"]; ?></th>
                                <th>
                                    <a href="pdfingresosep.php?id=<?php echo $datos2[$i]["c0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-success">Descargar PDF</a>
                                    <a href="editarIngresoSep.php?id=<?php echo $datos2[$i]["c0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-warning">Editar</a>
                                </th>
                                <th><?php echo $datos2[$i]["c6"]; ?></th>
                                <th><?php echo $datos2[$i]["c4"]; ?></th>
                                <th><?php echo $datos2[$i]["c1"]; ?></th>
                            </tr>
                        <?php }?>    
                        </tbody>
                    </table>

                    <table class="table table-striped table-bordered" id="t-pie">
                    <caption>Ingresos PIE</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Acciones</th>
                                <th>Detalle</th>
                                <th>Monto</th>
                                <th>Cuenta</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<sizeof($datos3);$i++){?>
                            <tr>
                                <th><?php echo $datos3[$i]["c0"]; ?></th>
                                <th>
                                <a href="pdfingreso.php?id=<?php echo $datos3[$i]["c0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-success">Descargar PDF</a>
                                <a href="editarIngresoPie.php?id=<?php echo $datos3[$i]["c0"]; ?>" type="submit" name="descargar" class="btn btn-xs btn-warning">Editar</a>
                                </th>
                                <th><?php echo $datos3[$i]["c6"]; ?></th>
                                <th><?php echo $datos3[$i]["c4"]; ?></th>
                                <th><?php echo $datos3[$i]["c1"]; ?></th>
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
        $("#t-pie").hide();
        $("#select_cuenta").on('change',function(){
            if($("#select_cuenta").val()==1){

                $("#t-sep").show();
                $("#t-general").hide();
                $("#t-pie").hide();

                
            }
            else if($("#select_cuenta").val()==2){

                $("#t-sep").hide();
                $("#t-general").show();
                $("#t-pie").hide();
            }
            else if($("#select_cuenta").val()==3){

                $("#t-sep").hide();
                $("#t-general").hide();
                $("#t-pie").show();
            }
            
        })
    })
</script>
<?php
require_once ("../clases/Factura.php");



$factura = new Factura();
$datos = $factura->obtenerDatosFactura();








include ("includes/header.php");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">listado de Facturas</h4>
                <div class="table-responsive ">
                    <table class="table display dataTable " style="width:100%" id="t-doc" >
                        <thead >
                            <tr>
                                <th>Acciones</th>
                                <th>N° Documento</th>
                                <th>Fecha Emisión</th>
                                <th>Fecha Pago</th>
                                <th>Tipo</th>
                                <th>Monto</th>
                                <th>Detalle</th>
                                <th>Estado</th>
                                <th>Rut</th>
                                <th>Razón Social</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<sizeof($datos);$i++){?>
                            <tr>
                                <th>                                    
                                    <a style="color:white;" class="btn btn-xs <?php echo $datos[$i]["respuesta"]; ?>"  name="btn_pagar" type="submit"  data-toggle="modal" data-target="#myModal<?php echo $datos[$i]["id_factura"]; ?>"><?php echo $datos[$i]["pago"]; ?> </a>
                                    <a href="editarDocumento.php?id=<?php echo $datos[$i]["id_factura"]; ?>" class="btn btn-xs btn-warning">Editar</a>
                                    <a href="" class="btn btn-xs btn-danger">Eliminar</a>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c1"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c2"]; ?>
                                </th>
                                <th>
                                <?php echo $datos[$i]["fecha_pago"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c3"]; ?>
                                </th>
                                <th>
                                    <?php echo number_format($datos[$i]['c4'], 0, "", "."); ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c5"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c6"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c8"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c7"]; ?>
                                </th>
                                <!-- Modal -->
                                <div id="myModal<?php echo $datos[$i]["id_factura"]; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog ">
                                    <!-- Contenido del modal -->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        <form action="../procesos/pagarFactura.php" method="POST">
                                            <div class="col-lg-12 grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h1 class="card-title"> Seleccione fecha de pago </h1> 
                                                        <div class="form-group">
                                                            <input type="date" class="form-control" name="pago_factura_dat" id="datepicker" >
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                
                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="id" value="<?php echo $datos[$i]["id_factura"]; ?>">
                                            <button type="submit" name="btn-delete" class="btn btn-success">Aceptar</button>          
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
<script src="../js/boton.js"></script>
<script>
$(document).ready(function(){

    $('#t-doc').DataTable({
        "order": [[ 0, "desc" ]]
    });

    if($("#swich").val()==1){
        $("[id*=btn_pagar]").removeClass("btn-success");
        $("[id*=btn_pagar]").addClass("btn-primary");
        $("[id*=btn_pagar]").text("Pagada");
        $("[id*=btn_pagar]").addClass("disabled");
    }
    if($("#swich").val()==0){
        $("[id*=btn_pagar]").addClass("btn-success");
        $("[id*=btn_pagar]").removeClass("btn-primary");
        $("[id*=btn_pagar]").text("Pagar");
        $("[id*=btn_pagar]").removeClass("disabled");
    }
})

</script>

<?php include ("includes/footer.php");?>
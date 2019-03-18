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
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" >
                        <thead>
                            <tr>
                                <th>N° Documento</th>
                                <th>Fecha Emisión</th>
                                <th>Tipo</th>
                                <th>Monto</th>
                                <th>Detalle</th>
                                <th>Estado</th>
                                <th>Rut</th>
                                <th>Razón Social</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i<sizeof($datos);$i++){?>
                            <tr>
                                <th>
                                    <?php echo $datos[$i]["c1"]; ?>
                                </th>
                                <th>
                                    <?php echo $datos[$i]["c2"]; ?>
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
                                <th>                                    
                                    <a href="../procesos/pagarFactura.php?id=<?php echo $datos[$i]["id_factura"]; ?>" class="btn btn-xs <?php echo $datos[$i]["respuesta"]; ?>"  name="btn_pagar" type="submit"><?php echo $datos[$i]["pago"]; ?></a>
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
<script src="../js/boton.js"></script>
<script>
$(document).ready(function(){
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
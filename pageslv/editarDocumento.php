<?php

require_once ("../claseslv/Proveedor.php");
require_once ("../claseslv/Factura.php");


$id= $_GET['id'];
$proveedor = new Proveedor();
$datos = $proveedor->obtenerDatosProveedor();

$factura = new Factura();
$datos2 = $factura->obtenerFactura($id);
for($i=0;$i<sizeof($datos2);$i++){
    $folio = $datos2[$i]['c1'];
    $id_proveedor = $datos2[$i]['id_proveedor'];
    $nombre_proveedor = $datos2[$i]['c7'];
    $fecha_emision = $datos2[$i]['c2'];
    $tipo_documento = $datos2[$i]['c3'];
    $monto = $datos2[$i]['c4'];
    $detalle = $datos2[$i]['c5'];

}

include ("includes/header.php");
?>


<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Editar Documento</h4>
                        <form action="../procesoslv/editarDocumento.php" class="form-sample" method="POST">                     
                            <div class="form-group">
                                <input type="text" name="id" value="<?php echo $id;?>" hidden>
                                <label for="">Folio</label>
                                <input type="text" class="form-control" name="folio_factura_in" value="<?php echo $folio?>"> 
                            </div>
                            <div class="form-group">
                                <label for="">Seleccionar proveedor</label>
                                <select name="select_proveedor_facturas" id="" class="form-control">
                                    <option value="<?php echo $id_proveedor?>"  selected><?php echo $nombre_proveedor?></option>
                                    <?php for($i=0;$i<sizeof($datos);$i++){?>
                                        <option value="<?php echo $datos[$i]["id_proveedores"];?>"><?php echo $datos[$i]["razon_social"];}?></option>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de Emisión</label>
                                <input type="date" class="form-control" name="emision_factura_dat" id="datepicker" value="<?php echo $fecha_emision?>">
                            </div> 
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <select name="select_tipo_facturas" id="" class="form-control">
                                    <option value="<?php echo $tipo_documento?>" selected><?php echo $tipo_documento?></option>
                                    <option value="1" >BOL</option>
                                    <option value="2" >BOLE</option>
                                    <option value="3" >FAC</option>
                                    <option value="4" >FACE</option>
                                    <option value="5" >ODE</option>
                                    <option value="6" >BOLEC</option>
                                    <option value="7" >BOLEX</option>
                                    <option value="8" >FACEL</option>
                                    <option value="9" >FACEX</option>
                                    <option value="10" >FIN</option>
                                    <option value="11" >DOCEX</option>
                                    <option value="12" >NOTACRE</option>
                                    <option value="13" >NOTADEB</option>
                                    <option value="14" >PLANILLA</option>
                                    <option value="15" >COMPROBANTE PAGO</option>
                                    <option value="16" >BOLH</option>
                                    <option value="17" >BHE</option>
                                    <option value="18" >ODE</option>
                                    <option value="19" >BPST</option>
                                    <option value="20" >BPSTE</option>
                                    <option value="21" >BOLHE</option>

                                </select>
                            </div>     
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="number" class="form-control" name="monto_factura_in" value="<?php echo $monto?>">
                            </div>
                            <div class="form-group">
                                <label for="">Detalle</label>
                                <textarea type="text-field" class="form-control" name="detalle_factura_txt"><?php echo $detalle?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="crear_factura_btn_aceptar">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/categorias.js"></script>
<?php include ("includes/footer.php");?>



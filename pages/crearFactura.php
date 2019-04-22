<?php

require_once ("../clases/Proveedor.php");


$proveedor = new Proveedor();
$datos = $proveedor->obtenerDatosProveedor();

include ("includes/header.php");
?>


<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Agregar Documento </h4>
                        <form action="../procesos/crearFactura.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Folio</label>
                                <input type="text" class="form-control" name="folio_factura_in">
                            </div>
                            <div class="form-group">
                                <label for="">Seleccionar proveedor</label>
                                <select name="select_proveedor_facturas" id="" class="form-control">
                                    <option value="" disabled selected>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos);$i++){?>
                                        <option value="<?php echo $datos[$i]["id_proveedores"];?>"><?php echo $datos[$i]["razon_social"];}?></option>
                                    <?php?>    
                                </select>   
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de Emisión</label>
                                <input type="date" class="form-control" name="emision_factura_dat" id="datepicker">
                            </div> 
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <select name="select_tipo_facturas" id="" class="form-control">
                                    <option value="" disabled selected>-- Seleccione --</option>
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
                                    <option value="22" >CHEQUE</option>

                                </select>
                            </div>     
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="number" class="form-control" name="monto_factura_in">
                            </div>
                            <div class="form-group">
                                <label for="">Detalle</label>
                                <textarea type="text-field" class="form-control" name="detalle_factura_txt"></textarea>
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



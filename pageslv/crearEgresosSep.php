<?php

require_once ("../claseslv/Conexion.php");
require_once ("../claseslv/Cuenta.php");
require_once ("../claseslv/CatEgresos.php");
require_once ("../claseslv/CatPadreEgreso.php");
require_once ("../claseslv/Factura.php");
require_once ("../claseslv/Egreso.php");





$cuentas = new Cuenta();
$datos = $cuentas->obtenerDatosCuenta();

$catEgresos = new CatEgresos();
$datos2 = $catEgresos->obtenerDatosCatEgresos();

$catPadreEgreso = new CatPadreEgreso();
$datos3 = $catPadreEgreso->obtenerDatosCatPadreEgreso();

$facturas = new Factura();
$datos4 = $facturas->obtenerFacturasPagadas();

$egreso = new Egreso();
$count = $egreso->contarSep();





include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Número Correlativo <?php echo $count+1;?></h1>
                        <form action="../procesoslv/crearEgresosSep.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Seleccionar Cuenta Banco</label>
                                <select name="select_cuenta_egresos"  class="form-control" >
                                    <option value="1" selected >Banco Chile SEP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Cuenta General</label>
                                <select name="select_cat_egresos_padre"  class="form-control" id="select_cat_egresos_padre" required>
                                    <option value="" selected disabled>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos3);$i++){?>
                                        <option value="<?php echo $datos3[$i]["id_padre_egreso"];?>"><?php echo $datos3[$i]["codigo"]." | ".$datos3[$i]["nombre"];}?></option>
                                    <?php?>      
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Sub Cuenta</label>
                                <select name="select_cat_egresos" class="form-control" id="select_cat_egresos" required>
                                    <option value="" selected disabled>-- Seleccione --</option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Factura</label>
                                <select name="select_factura_egreso"  class="form-control" id="select_factura_egreso" required>
                                    <option value="" selected disabled>-- Seleccione --</option>    
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="crear_egreso_btn_aceptar">Aceptar</button>
                            </div>
                            <div id="respuesta"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="miModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Contenido del modal -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <?php
                require_once ("../claseslv/Factura.php");


                $factura = new Factura();
                $datosf = $factura->obtenerFacturasPagadas();
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
                                        <th>Seleccionar</th>
                                        <th>N° Documento</th>
                                        <th>Fecha Emisión</th>
                                        <th>Tipo</th>
                                        <th>Monto</th>
                                        <th>Detalle</th>
                                        <th>Estado</th>
                                        <th>Rut</th>
                                        <th>Razón Social</th>
                                    </tr>
                                </thead>
                                <tbody><form action="../procesoslv/radio.php" method="POST">
                                    <?php for($i=0;$i<sizeof($datosf);$i++){?>
                                    <tr>
                                        <th>
                                            <div>
                                                <input type="radio" value="<?php echo $datosf[$i]["id_factura"]; ?>" name="radio_select">
                                            </div>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c1"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c2"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c3"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c4"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c5"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c6"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c8"]; ?>
                                        </th>
                                        <th>
                                            <?php echo $datosf[$i]["c7"]; ?>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="../js/categoriaslv.js"></script>
<script src="../js/facturaslv.js"></script>
<?php include ("includes/footer.php");?>



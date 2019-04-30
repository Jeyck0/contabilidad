<?php

require_once ("../claseslv/Conexion.php");
require_once ("../claseslv/Cuenta.php");
require_once ("../claseslv/CatPadreIngreso.php");
require_once ("../claseslv/Ingreso.php");

$cuentas = new Cuenta();
$datos = $cuentas->obtenerDatosCuenta();

$catPadre = new CatPadreIngreso();
$datos2 = $catPadre->obtenerDatosCatPadrIngreso();

$ingreso = new Ingreso();
$count = $ingreso->contar();


include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">Número Correlativo <?php echo $count+1;?></h1>
                        <form action="../procesoslv/crearIngresos.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Seleccionar Cuenta</label>
                                <select name="select_cuenta_ingresos" id="" class="form-control">
                                <option value="2" selected >Banco Chile General</option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Cuenta General</label>
                                <select name="select_cat_ingresos_padre"  class="form-control" id="select_cat_ingresos_padre" required>
                                    <option value="" selected disabled>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos2);$i++){?>
                                        <option value="<?php echo $datos2[$i]["id_padre_ingreso"];?>"><?php echo $datos2[$i]["codigo"]." | ".$datos2[$i]["nombre"];}?></option>
                                    <?php?>      
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Sub Cuenta</label>
                                <select name="select_cat_ingresos" class="form-control" id="select_cat_ingresos" required>
                                    <option value="" selected disabled>-- Seleccione --</option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input type="date" id="datepicker" class="form-control" name="fecha_ingreso">
                            </div>
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="number" class="form-control" name="monto_ingreso_in">
                            </div>
                            <div class="form-group">
                                <label for="">Glosa</label>
                                <textarea type="text-field" class="form-control" name="comentario_ingreso_txt"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="crear_ingreso_btn_aceptar">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/categoriasIngresoslv.js"></script>
<?php include ("includes/footer.php");?>



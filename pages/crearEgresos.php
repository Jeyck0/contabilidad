<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");
require_once ("../clases/CatEgresos.php");
require_once ("../clases/CatPadreEgreso.php");

$cuentas = new Cuenta();
$datos = $cuentas->obtenerDatosCuenta();

$catEgresos = new CatEgresos();
$datos2 = $catEgresos->obtenerDatosCatEgresos();




include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Egresos</h4>
                        <form action="../procesos/crearEgresos.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Seleccionar Cuenta</label>
                                <select name="select_cuenta_egresos" id="" class="form-control">
                                    <option value="" disabled selected>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos);$i++){?>
                                        <option value="<?php echo $datos[$i]["id"];?>"><?php echo $datos[$i]["nombre"];}?></option>
                                    <?php?>    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <select name="select_cat_egresos" id="" class="form-control">
                                    <option value="" disabled selected>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos2);$i++){?>
                                        <option value="<?php echo $datos2[$i]["id_categoria"];?>"><?php echo $datos2[$i]["nombre_categoria"];}?></option>
                                    <?php?>    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="text" class="form-control" name="monto_egreso_in">
                            </div>
                            <div class="form-group">
                                <label for="">Glosa</label>
                                <textarea type="text-field" class="form-control" name="comentario_egreso_txt"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="crear_egreso_btn_aceptar">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/categorias.js"></script>
<?php include ("includes/footer.php");?>



<?php

require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");
require_once ("../clases/CatIngresos.php");

$cuentas = new Cuenta();
$datos = $cuentas->obtenerDatosCuenta();

$catIngresos = new CatIngresos();
$datos2 = $catIngresos->obtenerDatosCatIngresos();


include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ingresos</h4>
                        <form action="../procesos/crearIngresos.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Seleccionar Cuenta</label>
                                <select name="select_cuenta_ingresos" id="" class="form-control">
                                    <option value="" disabled selected>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos);$i++){?>
                                        <option value="<?php echo $datos[$i]["id"];?>"><?php echo $datos[$i]["nombre"];}?></option>
                                    <?php?>    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <select name="select_cat_ingresos" id="" class="form-control">
                                    <option value="" disabled selected>-- Seleccione --</option>
                                    <?php for($i=0;$i<sizeof($datos2);$i++){?>
                                        <option value="<?php echo $datos2[$i]["id"];?>"><?php echo $datos2[$i]["nombre"];}?></option>
                                    <?php?>    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="text" class="form-control" name="monto_ingreso_in">
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

<?php include ("includes/footer.php");?>



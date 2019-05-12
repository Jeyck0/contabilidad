<?php
require_once ("../claseslv/Ingreso.php");
require_once ("../claseslv/Cuenta.php");
require_once ("../claseslv/CatPadreIngreso.php");

$id = $_GET['id'];

$ingreso = new Ingreso();
$datos = $ingreso->editarIngresoPie($id);
for($i=0;$i<sizeof($datos);$i++){
    
    $id_cuenta = $datos[$i]["id_cuenta"];
    $c0 = $datos[$i]["c0"]; //id ingreso
    $c4 = $datos[$i]["c4"]; //monto
    $c5 = $datos[$i]["c5"]; //fecha
    $id_cat_ingresos = $datos[$i]["id_padre_ingreso"];
    $padre_codigo = $datos[$i]["codigo"];
    $hijo_codigo = $datos[$i]["hijo_codigo"];
    $id_cat_hijo = $datos[$i]["id_cat_ingresos"];

    $id_cat_padre = $datos[$i]["id_padre_ingreso"];
    $c6 = $datos[$i]["c6"]; //comentario
    $m1 = $datos[$i]["m1"];
    $m3 = $datos[$i]["m3"];
    $m2 = $datos[$i]["m2"];
    

}

echo $c5;

$cuentas = new Cuenta();
$datos2 = $cuentas->obtenerDatosCuentaNoSelect($id_cuenta);


$padre = new CatPadreIngreso();
$datos3 = $padre->obtenerDatosCatPadreIngresoNoSelect($id_cat_padre);

// var_dump($datos3);

include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">Número Correlativo <?php echo $id?></h1>
                        <form action="../procesoslv/editarIngresosPie.php" class="form-sample" method="POST">
                        <input type="text" name="id" value="<?php echo $id;?>" hidden>
                            <div class="form-group">
                                <label for="">Seleccionar Cuenta</label>
                                <select name="select_cuenta_ingresos" id="" class="form-control">
                                <option value="<?php echo $id_cuenta;?>" selected ><?php echo $m1;?></option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Cuenta General</label>
                                <select name="select_cat_ingresos_padre"  class="form-control" id="select_cat_ingresos_padre" required>
                                <option value="<?php echo $id_cat_padre;?>" selected ><?php echo $padre_codigo." | ".$m2;?></option>
                                    <?php for($i=0;$i<sizeof($datos3);$i++){?>
                                        <option value="<?php echo $datos3[$i]["id_padre_ingreso"];?>"><?php echo $datos3[$i]["codigo"]." | ".$datos3[$i]["nombre"];}?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Sub Cuenta</label>
                                <select name="select_cat_ingresos" class="form-control" id="select_cat_ingresos" required>
                                <option value="<?php echo $id_cat_hijo;?>" selected ><?php echo $hijo_codigo." | ".$m3;?></option>                                      
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input type="date" id="datepicker" class="form-control" name="fecha_ingreso" value="<?php echo $c5;?>">
                            </div>
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="number" class="form-control" name="monto_ingreso_in" value="<?php echo $c4;?>">
                            </div>
                            <div class="form-group">
                                <label for="">Glosa</label>
                                <textarea type="text-field" class="form-control" name="comentario_ingreso_txt"><?php echo $c6;?></textarea>
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



<script src="../js/categorias_editar.js"></script>
<script src="../js/categoriasIngresoslv.js"></script>
<script src="../js/facturas.js"></script>
<?php include ("includes/footer.php");?>




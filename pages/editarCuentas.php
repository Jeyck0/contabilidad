<?php
require_once ("../clases/Conexion.php");
require_once ("../clases/Cuenta.php");

$id=$_GET['id'];
$cuentas = new Cuenta();
$nombre = $cuentas->obtenerNombreId($id);
$capital = $cuentas->obtenerCapitalId($id);


include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Actualizar Cuenta</h4>
                        <form action="../procesos/editarCuentas.php" class="form-sample" method="POST">
                            <input type="hidden" name = "id_cuenta" value="<?php echo $id ?>">

                            <div class="form-group">
                                <label for="">Nombre de cuenta</label>
                                <input type="text" class="form-control" name="nombre_cuenta_in" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Monto Inicial</label>
                                <input type="text" class="form-control" name="monto_cuenta_in" value="<?php echo $capital; ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="editar_cuenta_btn_aceptar">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php");?>



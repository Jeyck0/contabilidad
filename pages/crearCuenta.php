<?php

include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crear Cuenta</h4>
                        <form action="../procesos/crearCuenta.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Nombre de cuenta</label>
                                <input type="text" class="form-control" name="nombre_cuenta_in">
                            </div>
                            <div class="form-group">
                                <label for="">Monto Inicial</label>
                                <input type="text" class="form-control" name="monto_cuenta_in">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="crear_cuenta_btn_aceptar">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php");?>



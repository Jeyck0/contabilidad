<?php

require_once ("../clases/Conexion.php");

$conectar = new Conexion();
$conectar->conectar();

include ("includes/header.php");
?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crear Categoria de Ingresos</h4>
                        <form action="../procesos/crearCategoriaIngresos.php" class="form-sample" method="POST">
                            <div class="form-group">
                                <label for="">Codigo de categoria</label>
                                <input type="text" class="form-control" name="codigo_cat_ingresos_in">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre de categoria</label>
                                <input type="text" class="form-control" name="nombre_cat_ingresos_in">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success mr-2" name="crear_cat_ingresos_btn_aceptar">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php");?>



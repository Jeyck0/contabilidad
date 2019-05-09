<?php 

 include ("includes/header.php");?>

<div class="row">
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Rango de Fecha</h1>
                        <form action="../procesoslv/exportar_ingresos.php" class="form-sample" method="POST">
                            <div class="form-group">
                            <label for="">Desde</label>
                                <input type="date" class="form-control" name="fecha_inicio" required>
                            </div>
                            <div class="form-group">
                            <label for="">Hasta</label> 
                                <input type="date" class="form-control" name="fecha_termino" required>
                            </div>
                            <div class="form-group">
                                <button name="generar_reporte" type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php include ("includes/footer.php");?>
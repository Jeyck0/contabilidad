<!DOCTYPE html>
<html lang="en">

<head>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <!-- Required meta tags -->
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>María Auxiliadora</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a href="../index.html">
          <img src="../images/logo.png" alt="logo" width="50" height="50"/>
        </a>
        <a class="navbar-brand brand-logo-mini" href="../index.html">
          <img src="../images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Cuentas Banco</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../pages/crearCuenta.php">Crear</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/verCuentas.php">Ver</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#facturas" aria-expanded="false" aria-controls="facturas">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Documentos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="facturas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../pages/crearFactura.php">Agregar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/verFactura.php">Ver</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#proveedores" aria-expanded="false" aria-controls="proveedores">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Proveedores / Personas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="proveedores">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../pages/crearProveedores.php">Agregar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/verProveedores.php">Ver</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ingresos" aria-expanded="false" aria-controls="ingresos">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Ingresos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ingresos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../pages/crearIngresos.php">Crear</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/verIngresos.php">Ver</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#egresos" aria-expanded="false" aria-controls="egresos">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Egresos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="egresos">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link"  href="../pages/crearEgresos.php">Crear</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/verEgresos.php">Ver</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

         <!-- Modal -->
          <div id="modalopc" class="modal fade" role="dialog">
            <div class="modal-dialog ">
              <!-- Contenido del modal -->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">   
                  <h3 class="text-center"> Por Favor escoja el tipo :</h3>
                  <div class="container">
                    <div class="row">
                      <div class="col-12 text-center pt-3"><a href="../pages/crearEgresos.php" class="btn btn-outline-success btn-lg btn-block">Egreso con Documento</a></div>
                    </div>
                    <div class="row">
                    <div class="col-12 text-center pt-3"><a href="" class="btn btn-outline-info btn-lg btn-block">Egreso Rápido</a></div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  </form>
                </div>
              </div>
            </div>
          </div>
      
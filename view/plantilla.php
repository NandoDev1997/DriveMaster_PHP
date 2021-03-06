<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php echo NOMBRE_SITIO ?></title>
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="css/adminlte.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
  <!-- REQUIRED SCRIPTS -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="js/adminlte.min.js"></script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i> <?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?> <i class="far fa-caret-square-down fa-xs"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header"><?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?></span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item dropdown-footer">Cerrar sessi??n <i class="fas fa-sign-out-alt"></i></a>
          </div>
        </li>

      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo RUTA_HOST; ?>" class="brand-link">
        <img src="img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">DriveMaster</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo 'img/users/'.$_SESSION['usuario']['imagen'];?>" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido']; ?></a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="?pagina=inicio" class="nav-link" id="pag_inicio">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Inicio</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?pagina=archivos_publicos" class="nav-link" id="pag_archivos_publicos">
                <i class="nav-icon fas fa-folder-open"></i>
                <p>Archivos p??blicos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?pagina=compartidos" class="nav-link" id="pag_compartidos">
                <i class="nav-icon fas fa-share-alt-square"></i>
                <p>Compartidos conmigo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Grupos de trabajo
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-database nav-icon"></i>
                    <p>Bases de datos</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="?pagina=usuarios" class="nav-link" id="pag_usuarios">
                <i class="nav-icon fas fa-users"></i>
                <p>Usuarios</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?pagina=configuracion" class="nav-link" id="pag_configuracion">
                <i class="nav-icon fas fa-cogs"></i>
                <p>Configuraci??n</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 id="titulo_page" class="m-0 text-dark">Starter Page</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php?pagina=inicio">Home</a></li>
                <li class="breadcrumb-item active" id="breadcum_second">Starter Page</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>

      <!-- CONTENIDO -->
      <div class="content">
        
        <?php
          $plantilla = new ControladorPlantilla();
          $plantilla->cargarVista();
          echo '
          <script>
              if (window.history.replaceState) {
                  window.history.replaceState(null, null, window.location.href);
              }
          </script>
          ';
        ?>
        
      </div>
      <!-- CONTENIDO -->
    </div>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">Anything you want</div>
      <strong>Copyright &copy; 2014-2019
        <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
    </footer>
  </div>
</body>

</html>
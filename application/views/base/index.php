<?php
/*
		include 'config/config.php';
		include 'config/conexion.php';
		$db = Conexion::conectar($dbname,$user,$pass);

		$pagina = 'inicio.php';
		if (isset($_REQUEST['pagina'])) {
			$pagina = $_REQUEST['pagina'];
		}

		$ruta = '';
		if (isset($_REQUEST['ruta'])) {
			$ruta = $_REQUEST['ruta'];
		}

		$buscar = '%%';
		if (isset($_REQUEST['buscar'])) {
			$buscar = '%'.$_REQUEST['buscar'].'%';
		}





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>FunerApp 1.0</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="d<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">ist/css/estilo.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<script type="text/javascript">
	function full(element) {
	  if(element.requestFullScreen) {
	    element.requestFullScreen();
	  } else if(element.mozRequestFullScreen) {
	    element.mozRequestFullScreen();
	  } else if(element.webkitRequestFullScreen) {
	    element.webkitRequestFullScreen();
	  }
	}
		</script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini" onload="full(document.documentElement);">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-dark navbar-light border-bottom fixed-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inli<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">ne ml-3" action="#">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
				<input type="hidden" name="pagina" value="<?php echo $pagina ?>">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
				<a href="javascript:history.back()" class="btn pull-right">Regresar <i class="fa fa-arrow-left"></i></a>
      </div>
    </form>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
			<i class="nav-icon fa fa-spinner verde" style="color:#85CE36"></i>
      FunerApp
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link btnmenu">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Principal
              </p>
            </a>
          </li>
					<li class="nav-item has-treeview">
            <a href="?pagina=cliente/listado.php" class="nav-link btnmenu">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              <p>
                Afiliados
              </p>
            </a>
          </li>

				  <li class="nav-item has-treeview">
            <a href="?pagina=contrato/listado.php" class="nav-link btnmenu">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
								<p>
	                Contratos
	              </p>
            </a>
          </li>

					<li class="nav-item has-treeview">
            <a href="?pagina=formularioprestamos.php" class="nav-link btnmenu">
              <i class="nav-icon fa fa-money"></i>
              <p>
                Pagos
              </p>
            </a>
          </li>
					<li class="nav-item has-treeview">
            <a href="#" class="nav-link btnmenu">
              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
              <p>
                Informes
              </p>
            </a>
          </li>
					<li class="nav-item has-treeview">
            <a href="contrato/export.php" target="_blank" class="nav-link btnmenu">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>
                Configuración
              </p>
            </a>
          </li>
					<li class="nav-item has-treeview" onclick="launchFullScreen(document.documentElement);">
            <a href="#" class="nav-link btnmenu">
              <i class="fa fa-screen" aria-hidden="true"></i>
              <p>
                Pantalla Completa
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>

  <?php //include 'cliente/listado.php';	<button onclick="launchFullScreen(document.documentElement);"> Entrar en pantalla completa </button>
 ?>

  <?php include $pagina; ?>


</div>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
<script src="dist/js/funerapp.js"></script>

</body>
</html>
*/?>

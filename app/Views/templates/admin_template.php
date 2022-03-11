<?php

use App\Controllers\ClienteControl;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../../../assets/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="../../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../../../assets/plugins/bootstrap-select/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="../../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
	<link rel="stylesheet" href="../../../assets/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="../../../assets/plugins/datepicker/css/bootstrap-datepicker.min.css">

	<script src="../../../assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="https://kit.fontawesome.com/08f208980a.js" crossorigin="anonymous"></script>
	<title>UNIVO 2021 | Dashboard</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
		</nav>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="<?= site_url('dashboard')?>" class="brand-link">
				<img src="../../../assets/dist/img/icon03.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Inicio</span>
			</a>
			<div class="sidebar">
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-header text-center">NAVEGACION PRINCIPAL</li>

						<li class="nav-item has-treeview">
							<a href="<?= site_url('cliente')?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Clientes<i class="right fas fa-angle-left"></i>
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p> Salir </p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		<div class="content-wrapper">
            <?= $this->renderSection("content")?>
        </div>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright &copy; 2020 <a href="#">Sistema</a>.</strong> Todos los derechos reservados.
		</footer>
		<aside class="control-sidebar control-sidebar-dark">
		</aside>
	</div>
	<script src="../../../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../../assets/dist/js/adminlte.min.js"></script>
	<script src="../../../assets/dist/js/demo.js"></script>
	<script src="../../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../../../assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
	<script src="../../../assets/plugins/bootstrap-select/js/i18n/defaults-es_ES.min.js"></script>
	<script src="../../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<script src="../../../assets/plugins/overlayScrollbars/js/OverlayScrollbars.min.js"></script>
	<script src="../../../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<script src="../../../assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../../../assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script src="../../../assets/plugins/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
</body>
</html>


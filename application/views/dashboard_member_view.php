<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets\images\logo\logo-green-square.png">
	<link rel="icon" type="image/png" href="assets\images\logo\logo-green-square.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Marketplace LH</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

	<!-- CSS Files -->
	<link href="assets/assets_admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
	<link href="assets/assets_admin/css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>

	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-color="green" data-background-color="white">
			<a href="home" class="logo">
				<img src="assets\images\logo\logo-green-square.png" style="width: 50%; margin-left: 20%;">
			</a>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item  ">
						<a class="nav-link" href="home">
							<i class="material-icons">arrow_back_ios</i>
							<p>Kembali ke Home</p>
						</a>
					</li>
					<li class="nav-item active  ">
						<a class="nav-link" href="dashboard_member">
							<i class="material-icons">eco</i>
							<p>Dashboard</p>
						</a>
					</li>
					<li class="nav-item  ">
						<a class="nav-link" href="list_kampanye_member">
							<i class="material-icons">tour</i>
							<p>List Kampanye</p>
						</a>
					</li>
					<li class="nav-item  ">
						<a class="nav-link" href="list_donasi_member">
							<i class="material-icons">account_balance_wallet</i>
							<p>List Donasi</p>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="main-panel" style="background: url(assets/images/home/homes1.png) fixed center 	; background-size: cover">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" style="color: black;" href="javascript:;">
							<h3>
								Selamat Datang !
								<?php echo $_SESSION["email"]; ?>
							</h3>
						</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<div class="navbar-form">
							<div class="input-group no-border">
								<div class="ripple-container"></div>
								</button>
							</div>
						</div>
						<ul class="navbar-nav">

							<li class="nav-item dropdown">
								<a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons" style="color: whitesmoke;">exit_to_app</i>
									<p class="d-lg-none d-md-block">
										Akun
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
									<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Log out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-success card-header-icon ">
									<div class="card-icon">
										<i class="material-icons">tour</i>
									</div>
									<a class="nav-link" href="kampanye">
										<p class="card-category">Kampanye</p>
										<h5 class="card-title">Ikut Kampanye
										</h5>
								</div>
								<div class="card-footer">
									<div class="stats">
										Kegiatan kampanye lingkungan
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-success card-header-icon kartu">
									<div class="card-icon">
										<i class="material-icons">account_balance_wallet</i>
									</div>
									<a class="nav-link" href="donasi">
										<p class="card-category">Donasi</p>
										<h5 class="card-title">Ikut Donasi</h5>
								</div>
								<div class="card-footer">
									<div class="stats">
										Donasi kegiatan lingkungan
									</div>
								</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats" data-toggle="modal" data-target="#myModal">
								<div class="card-header card-header-success card-header-icon kartu">
									<div class="card-icon">
										<i class="material-icons">add_task</i>
									</div>
									<a class="nav-link" style="cursor:pointer;">
										<p class="card-category">Verifikasi</p>
										<h5 class="card-title">Verifikasi Akun</h5>
								</div>
								<div class="card-footer">
									<div class="stats">
										Ajukan validasi member
									</div>
								</div>
								<!-- Modal -->
								<?php if ($validasi == 0) : ?>
									<div id="myModal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<form action="<?php echo base_url(); ?>/Dashboard_Member/tambah" method="post" enctype="multipart/form-data">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" style="text-align: center;">Ajukan Verifikasi</h4>
													</div>

													<div class="modal-body">
														<p>Verifikasi akun anda dengan mengirimkan foto selfie anda dengan Kartu Identitas, tulisan pada kartu identitas harus terlihat jelas</p>
														<label class="bmd-label-floating">Gambar</label><br>
														<input type="file" name="filefoto" id="filefoto" required><br>
													</div>
													<div class="modal-footer">
														<button type="submit" value="upload ktp" class="btn btn-primary pull-right">Submit</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								<?php else : ?>
									<div id="myModal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" style="text-align: center;">Sudah Terverifikasi</h4>
												</div>
											</div>
										</div>
									</div>
								<?php endif; ?>
									</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-success card-header-icon kartu">
									<div class="card-icon">
										<i class="material-icons">flag</i>
									</div>
									<a class="nav-link" href="buat_kampanye">
										<p class="card-category">Kampanye</p>
										<h5 class="card-title">Buat Kampanye</h5>
								</div>
								<div class="card-footer">
									<div class="stats">
										Buat Kampanye anda sendiri
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>

	<!--   Core JS Files   -->
	<script src="assets/assets_admin/js/core/jquery.min.js"></script>
	<script src="assets/assets_admin/js/core/popper.min.js"></script>
	<script src="assets/assets_admin/js/core/bootstrap-material-design.min.js"></script>
	<script src="assets/assets_admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!-- Plugin for the momentJs  -->
	<script src="assets/assets_admin/js/plugins/moment.min.js"></script>
	<!--  Plugin for Sweet Alert -->
	<script src="assets/assets_admin/js/plugins/sweetalert2.js"></script>
	<!-- Forms Validations Plugin -->
	<script src="assets/assets_admin/js/plugins/jquery.validate.min.js"></script>
	<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
	<script src="assets/assets_admin/js/plugins/jquery.bootstrap-wizard.js"></script>
	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/assets_admin/js/plugins/bootstrap-selectpicker.js"></script>
	<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script src="assets/assets_admin/js/plugins/bootstrap-datetimepicker.min.js"></script>
	<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
	<script src="assets/assets_admin/js/plugins/jquery.dataTables.min.js"></script>
	<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
	<script src="assets/assets_admin/js/plugins/bootstrap-tagsinput.js"></script>
	<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/assets_admin/js/plugins/jasny-bootstrap.min.js"></script>
	<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
	<script src="assets/assets_admin/js/plugins/fullcalendar.min.js"></script>
	<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
	<script src="assets/assets_admin/js/plugins/jquery-jvectormap.js"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/assets_admin/js/plugins/nouislider.min.js"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	<!-- Library for adding dinamically elements -->
	<script src="assets/assets_admin/js/plugins/arrive.min.js"></script>
	<!-- Chartist JS -->
	<script src="assets/assets_admin/js/plugins/chartist.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="assets/assets_admin/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="assets/assets_admin/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/assets_admin/demo/demo.js"></script>

	<script>
		$(document).ready(function() {
			$().ready(function() {
				$sidebar = $('.sidebar');

				$sidebar_img_container = $sidebar.find('.sidebar-background');

				$full_page = $('.full-page');

				$sidebar_responsive = $('body > .navbar-collapse');

				window_width = $(window).width();

				fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
			});
		});
	</script>

	<!-- Preloader -->
	<div id="preloader">
		<script>
			$(document).ready(function() {
				$("#preloader").fadeOut();
			});
		</script>
	</div>

</body>

</html>
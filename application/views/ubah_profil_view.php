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
	<!-- Core theme JS-->
	<link rel="stylesheet" href="css/util.css">
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="css/styles.css">

	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>

</head>

<body class="">
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
					<li class="nav-item   ">
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

		<div class="main-panel" style="background: url(assets/assets_admin/img/background-member2.png) fixed center 	; background-size: cover">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" style="color: black;" href="javascript:;">
							<h3>Selamat Datang !<i class="material-icons" style="color:green;">eco</i></h3>
						</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
						<span class="navbar-toggler-icon icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end">
						<form class="navbar-form">
							<div class="input-group no-border">
								<div class="ripple-container"></div>
								</button>
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons" style="color: whitesmoke;">assignment_ind</i>
									<p class="d-lg-none d-md-block">
										Profil
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="ubah_profil">Ubah Profil</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="material-icons" style="color: whitesmoke;">exit_to_app</i>
									<p class="d-lg-none d-md-block">
										Akun
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
									<a class="dropdown-item" href="home">Log out</a>
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
						<div class="col-md-8">
							<div class="card">
								<div class="card-header card-header-success">
									<h4 class="card-title">Ubah Profil</h4>
									<p class="card-category">Lengkapi profil anda</p>
								</div>
								<div class="card-body">
									<form>
										<div class="wrap-input100 validate-input" data-validate="Gunakan Nama yang Valid">
											<input class="input100" type="text" name="nama" placeholder="Nama Lengkap" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-address-book" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Gunakan Tanggal Lahir yang Valid">
											<input class="input100" type="date" name="date" placeholder="Tanggal Lahir" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-calendar" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Pilih Jenis Kelamin">
											<select class="input100 required" name="jk" required>
												<option value="" disabled selected>Pilih Jenis Kelamin</option>
												<option value="saab">Pria</option>
												<option value="fiat">Wanita</option>
											</select>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-user" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Gunakan Nomor Telepon yang Valid">
											<input class="input100" type="no_tlp" name="no_tlp" placeholder="Nomor Telepon" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-phone" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Gunakan NIK yang Valid">
											<input class="input100" type="nik" name="nik" placeholder="Nomor Induk Kependudukan" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-address-card" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Gunakan Email yang Valid: ez@abc.xyz">
											<input class="input100" type="text" name="email" placeholder="Email" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Kata Sandi Diperlukan">
											<input class="input100" type="password" name="password" placeholder="Kata Sandi" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-lock" aria-hidden="true"></i>
											</span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Kata Sandi Tidak Cocok">
											<input class="input100" type="password" name="password" placeholder="Konfirmasi Kata Sandi" required>
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-lock" aria-hidden="true"></i>
											</span>
										</div>
										<button type="submit" class="btn btn-primary pull-right">Ubah Profil</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
						<!--Avatar-->
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<a href="javascript:;">
										<img class="img" src="assets/assets_admin/img/faces/marc.jpg" />
									</a>
								</div>
								<div class="card-body">
									<h6 class="card-category text-gray">CEO / Co-Founder</h6>
									<h4 class="card-title">Alec Thompson</h4>
									<p class="card-description">
										iTerra memberikan edukasi dan mengajak kita untuk bersama-sama menjaga lingkungan sekitar
									</p>
									<i class="material-icons" href="#" style="cursor:pointer;" data-toggle="modal" data-target="#myModal">edit</i>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" style="text-align: center;">Ubah Status</h4>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<textarea class="form-control" rows="4"></textarea>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
												<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#84C44E;">Simpan</button>
											</div>
										</div>
									</div>
								</div>
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

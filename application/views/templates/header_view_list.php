<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Marketplace LH</title>
	<link rel="icon" type="image/png" href="..\..\assets\images\logo\logo-green-square.png">

	<!--Fonts-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" type="text/css">

	<!-- CSS BUNDLE -->

	<!--Third party plugin CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />

	<!-- Core theme JS-->
	<link rel="stylesheet" href="../../css/styles.css" />

	<!--CSS (includes Bootstrap)-->
	<link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<style>
		/* Back to the Top */
		html {
			scroll-behavior: smooth;
		}
	</style>
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="containers">
			<a class="navbar-brand js-scroll-trigger" href="<?= base_url(); ?>home"><img src="..\..\assets\images\logo\logo-green-square.png" style="width: 70px;" </a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto my-2 my-lg-0">
						<li class="nav-item"><a class="nav-link js-scroll-trigger"></a></li>
						<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>produk">PRODUK</a></li>
						<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>kampanye">KAMPANYE</a></li>
						<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>donasi">DONASI</a></li>
						<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>about">TENTANG KAMI</a></li>
						<?php if ($this->session->userdata('akses') == "1") { ?>
							<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>dashboard_admin">DASHBOARD</a></li>
						<?php } elseif ($this->session->userdata('akses') == "0") { ?>
							<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>dashboard_member">AKUN SAYA</a></li>
						<?php } else { ?>
							<li class="nav-item"><a style="font-size:large;" class="nav-link js-scroll-trigger" href="<?= base_url(); ?>login">MASUK</a></li>
						<?php } ?>
					</ul>
				</div>
		</div>
	</nav>

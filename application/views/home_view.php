	<!-- Masthead-->
	<header class="masthead">
		<!-- Carousel -->
		<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner w3-animate-opacity">
				<!-- Carousel 0 -->
				<div class="carousel-item active">
					<img style="width:100%; height: 100vh; -webkit-filter:brightness(40%)" src=" assets/images/home/homes1.png" alt="0">
					<div class="carousel-caption" data-aos="zoom-in">
						<div class="containers h-100">
							<div class="row h-100 align-items-center justify-content-center text-center">
								<div class="col-lg-10 align-self-end">
									<h1 class="text-white font-weight-bold">MARKETPLACE <br> LINDUNGI HUTAN</h1>
								</div>
								<div class="col-lg-8 align-self-baseline">
									<p class="text-white-75 font-weight-light mb-5">Bersama Menghijaukan Indonesia</p>
									<img src="assets\images\logo\logo-green-square.png" style="width: 100px;">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Carousel 1 -->
				<div class="carousel-item">
					<img style="width:100%; height: 100vh; -webkit-filter:brightness(40%)" src="assets/images/home/homes2.png" alt="1" width="2100" height="500">
					<div class="carousel-caption">
						<div class="containers h-100">
							<div class="row h-100 align-items-center justify-content-center text-center">
								<div class="col-lg-10 align-self-end">
									<h1 class="text-white font-weight-bold">HAL SEDERHANA, JADI LEBIH BERMAKNA BERSAMA LINDUNGI HUTAN</h1>
								</div>
								<div class="col-lg-8 align-self-baseline">
									<p class="text-white-75 font-weight-light mb-5">Mulai Tanam #PohonPertama kamu</p>
									<img src="assets\images\logo\logo-green-square.png" style="width: 100px;">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Carousel 2 -->
				<div class="carousel-item">
					<img style="width:100%; height: 100vh; -webkit-filter:brightness(40%)" src="assets/images/home/homes3.png" alt="2" width="2100" height="500">
					<div class="carousel-caption">
						<div class="containers h-100">
							<div class="row h-100 align-items-center justify-content-center text-center">
								<div class="col-lg-10 align-self-end">
									<h1 class="text-white font-weight-bold">BUAT AKSI PENANAMAN DAN LINGKUNGAN</h1>
								</div>
								<div class="col-lg-8 align-self-baseline">
									<p class="text-white-75 font-weight-light mb-5">Dengan Mudah, Aman, dan Transparan</p>
									<img src="assets\images\logo\logo-green-square.png" style="width: 100px;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</header>

	<!-- About Us-->
	<section id="about" class="about">
		<div class="container">
			<div class="section-title" data-aos="fade-down">
				<h2>Apa itu Lindungi Hutan?</h2>
			</div>
			<div class="row content">
				<div class="col-lg-4 pt-4" data-aos="fade-right">
					<img src="assets\images\logo\lindungihutan.jpg" style="width: 250px;">
				</div>
				<div class="col-lg-8 pt-4 pt-lg-0 text-justify" data-aos="fade-left">
					<p>
						LindungiHutan.com merupakan platform galang dana untuk konservasi hutan dan lingkungan. Lindungi Hutan ialah platform crowdsourcing penggalangan dana online untuk konservasi hutan dan lingkungan. Dimana kegiatan yang dilakukan Lindungi Hutan dimulai dari jelajah lingkungan melihat kerusakan lingkungan di sekitar kita, kemudian kita mencari komunitas dan “petani” di sekitar wilayah tersebut untuk sama-sama membuat agenda penanaman, bukan hanya itu kita juga membuka relawan di setiap kota untuk bersama-sama untuk mewujudkan penanaman  se Indonesia.
					</p>
					<a class="button button-light button-xl js-scroll-trigger mt-4" href="about">Baca Selengkapnya</a>
				</div>
			</div>

		</div>
	</section>

	<!-- Produk -->
	<section id="produk" class="produk">
		<div class="container">
			<div class="text-center section-title-produk">
				<h2 style="color: #fff;">PRODUK TERBARU</h2>
			</div>
			<div>
				<div class="row content">

					<div class="col-lg-6 pt-4 pt-lg-0 offset-2 produk-item">
						<?php
						foreach ($list_produk_data->result_array() as $i) :
							$id = $i['kode_produk'];
							$judul = $i['judul_produk'];
							$gambar = $i['gambar'];
							$harga = $i['harga']
						?>

						<div class="row content">
							<div class="col-lg-6 produk-item produk-hover-zoom-mini">
								<a href="<?php echo base_url() . 'produk_list/view/' . $id; ?>">
									<img src="<?php echo base_url() . 'assets/images/produk/' . $gambar; ?>" style="width: 280px; padding:1rem">
								</a>
							</div>
							<div class="col-lg-6 produk-item">
								<div class="produk-caption">
									<a href="<?php echo base_url() . 'produk_list/view/' . $id; ?>">
										<h4>
											<?php echo $judul; ?>
										</h4>
									</a>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

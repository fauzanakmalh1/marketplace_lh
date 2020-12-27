	<!-- Donasi-->
	<section class="page-section bg-light donasi" id="donasi">
		<div class="container">
			<div class="text-center section-title donasi-title" data-aos="fade-down">
				<h2 class="section-heading">Donasi</h2>
			</div>

			<!-- Contents -->
			<div class="row">
				<?php foreach ($data->result_array() as $i) :
					$id = $i['kode_donasi'];
					$judul = $i['judul_donasi'];
					$gambar = $i['gambar'];
					$tgl = $i['tanggal_donasi'];
					$jml = $i['jumlah_donasi'];
				?>
					<div class="col-lg-4 mb-4" data-aos="zoom-in">
						<div class="donasi-item">

							<div class="img-hover-zoom">
								<img src="<?= base_url() . 'assets/images/donasi/' . $gambar; ?>" style="height:100%; weight:100%;">
							</div>

							<a>
								<div class="donasi-caption">
									<a href="<?php echo base_url() . 'list_donasi/view/' . $id; ?>">
										<h3>
											<?php echo $judul; ?>
										</h3>
									</a>
									<p class="donasi-value">Rp.<?= $jml; ?></p>
									<p class="donasi-day">hingga <?= $tgl; ?></p>
									<a href="<?php echo base_url() . 'list_donasi/view/' . $id; ?>" class="btn btn-detail">Detail ➔</a>
								</div>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

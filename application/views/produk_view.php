	<!-- Produk -->
	<section id="produk-list">
		<div class="container">
			<div class="produk-item" style="padding-right: 20px;">
				<div class="text-center section-title-produk">
					<h2>Produk</h2>
				</div>

				<div class="row content">
					<div class="col-lg-12 produk-item my-2">
						<div class="border-produk"></div>
					</div>
					<?php
					foreach ($data->result_array() as $i) :
						$id = $i['kode_produk'];
						$judul = $i['judul_produk'];
						$gambar = $i['gambar'];
						$harga = $i['harga']
						?>
						<div class="col-lg-6 produk-item produk-hover-zoom">
							<a>
								<img src="<?php echo base_url() . 'assets/images/produk/' . $gambar; ?>" >
							</a>
						</div>
						<div class="col-lg-6 produk-item">
							<div class="produk-caption">
								<a href="<?php echo base_url() . 'produk_list/view/' . $id; ?>">
								<h3>
										<?php echo $judul; ?>
									</h3>
								</a>
								<h5>Rp. <?php echo $harga; ?>-an</h5>
							</div>
						</div>
						<div class="col-lg-12 produk-item my-2">
							<div class="border-produk"></div>
						</div>
						<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
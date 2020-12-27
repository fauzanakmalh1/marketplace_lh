<?php
	$b = $data->row_array();

	if ($b['kode_produk'] == "1") {
		$source = "json/produkStainless.json";
	} elseif ($b['kode_produk'] == "2") {
		$source = "json/produkBamboo.json";
	} else {
		redirect(base_url("login"));
	}

	$json = file_get_contents($source);
	$produk = json_decode($json);

	$namaPaket = $produk->Paket->nama;
	$hargaPaket = $produk->Paket->harga;
	$namaSatuan = $produk->Satuan->nama;
	$hargaSatuan = $produk->Satuan->harga;
?>

	<section id="about" class="about" style="background-color: #f3f5fa;">
		<div class="containers">
			<div class="content">
				<div class="row">
					<div class="col-md-8 mx-auto text-center">
						<h2 style="padding-top:100px;"><?php echo $b['judul_produk']; ?></h2>
						<hr />
						<img src="<?php echo base_url() . 'assets/images/produk/' . $b['gambar']; ?>" style="width: 50%; border-radius:10px;">
						<div class="produk-caption mt-4">
							<h5 style="color:#757575">Harga: Rp. <?php echo $b['harga']; ?>-an</h5><br>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-4 col-md-offset-2 text-center">
						<img src="../../assets/images/produk/park.png" style="width: 20%; border-radius:10px;">
						<div class="produk-caption mt-4">
							<h3>0</h3>
							<h5 style="color:#757575">Pohon</h5><br>
						</div>
					</div>
					<div class="col-md-6 text-justify">
						<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
							<li class="nav-item mt-2">
								<a class="nav-link active" id="pills-paket-tab" data-toggle="pill" href="#pills-paket" role="tab" aria-controls="pills-paket" aria-selected="true">
									Paket
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-satuan-tab" data-toggle="pill" href="#pills-satuan" role="tab" aria-controls="pills-satuan" aria-selected="false">
									Satuan
								</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-paket" role="tabpanel" aria-labelldby="pills-paket-tab">
								<ul class="list-group ml-4">
									<?php for ($i=0; $i < count($namaPaket) ; $i++) { ?>
									<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
										<span class="badge badge-pill badge-pill-sell mr-4"><?= $hargaPaket[$i] . "<br>"; ?></span>
										<?= $namaPaket[$i] . "<br>"; ?>
										<button type="button" class="btn button-sell ml-4">Beli</button>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div class="tab-pane fade" id="pills-satuan" role="tabpanel" aria-labelledby="pills-satuan-tab">
							<ul class="list-group ml-4">
									<?php for ($i=0; $i < count($namaSatuan) ; $i++) { ?>
									<li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
										<span class="badge badge-pill badge-pill-sell mr-4"><?= $hargaSatuan[$i] . "<br>"; ?></span>
										<?= $namaSatuan[$i] . "<br>"; ?>
										<button type="button" class="btn button-sell ml-4">Beli</button>
									</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

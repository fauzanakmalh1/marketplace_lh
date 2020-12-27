<?php
	$b = $data->row_array();
?>

	<section id="kampanye" class="kampanye" style="background-color: #f3f5fa;">
		<div class="containers">
			<div class="content">
				<div class="col-md-8 mx-auto text-center">
					<h2 style="padding-top:100px;"><?php echo $b['judul_kampanye']; ?></h2>
					<hr />
					<img src="<?php echo base_url() . 'assets/images/kampanye/' . $b['gambar']; ?>" style=" width: 100%; border-radius:10px;">
					<div class="kampanye-caption mt-4 text-center">
						<h5 style="color:#757575">Dilaksanakan pada tanggal <?php echo $b['tanggal']; ?> dan digagas oleh <?php echo $b['penulis']; ?></h5><br>
					</div>
				</div>
				<div class="col-md-8 mx-auto">
					<?php echo $b['deskripsi']; ?>
				</div>
			</div>
		</div>
	</section>

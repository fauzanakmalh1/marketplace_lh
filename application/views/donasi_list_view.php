<?php
$b = $data->row_array();
?>

	<section id="donasi" class="donasi" style="background-color: #f3f5fa;">
		<div class="containers">
			<div class="content">
				<div class="row">
					<div class="col-md-8 mx-auto text-center">
						<h2 style="padding-top:100px;"><?php echo $b['judul_donasi']; ?></h2>
						<hr />
						<img src="<?php echo base_url() . 'assets/images/donasi/' . $b['gambar']; ?>" style=" width: 100%; border-radius:10px;">
						<div class="donasi-caption mt-4">
							<h5 style="color:#757575">Donasi hingga tanggal: <?php echo $b['tanggal_donasi']; ?></h5><br>
						</div>
					</div>
					<div class="col-md-8 mx-auto">
						<?php echo $b['deskripsi']; ?>
					</div>
				</div>
			</div>
			<div class="card-body table-responsive text-center">
				<?php if ($this->session->userdata('akses') == "0") { ?>
					<?php if ($b['nilai'] == 0) : ?>
						<?php
						foreach ($data as $don) { ?><?php } ?>
						Ikut Donasi
						<button type="button" rel="tooltip" title="ikuti" class="btn btn-outline-success btn-sm">
							<i class="material-icons" style="color: white;"><?php echo anchor('List_Donasi_Member/ikut/' . $b['email'], 'done_outline'); ?></i>
						</button>
					<?php endif; ?>
				<?php } ?>

				<?php if ( $this->session->userdata('akses') == "1") { ?>
				<?php if ($b['nilai'] == 1) : ?>
					<h3 style="color:#757575">Rekening Donasi <?php echo $b['judul_donasi']; ?></h3><br>
					<table class=" table table-hover container">
						<thead style="color:#757575; font-weight:bolder">
							<th>Bank</th>
							<th>Info Transfer</th>
						</thead>
						<tbody style="color:#757575; font-size:25px">
							<tr>
								<td><img src=" ..\..\assets\images\donasi\bca.png" style="width: 300px;">
								</td>
								<td><b>5235175509</b><br>a.n. Lindungi Hutan</td>
							</tr>
							<tr>
								<td><img src="..\..\assets\images\donasi\bri.png" style="width: 300px;"></td>
								<td><b>1003849964</b><br>a.n. Lindungi Hutan</td>
							</tr>
							<tr>
								<td><img src="..\..\assets\images\donasi\mandiri.png" style="width: 300px;"></td>
								<td><b>1320387628942</b><br>a.n. Lindungi Hutan</td>
							</tr>
						</tbody>
					</table>
				<?php endif; ?>
				<?php } elseif ($this->session->userdata('akses') == "0") { ?>
				<?php if ($b['nilai'] == 1) : ?>
					<h3 style="color:#757575">Rekening Donasi <?php echo $b['judul_donasi']; ?></h3><br>
					<table class=" table table-hover container">
						<thead style="color:#757575; font-weight:bolder">
							<th>Bank</th>
							<th>Info Transfer</th>
						</thead>
						<tbody style="color:#757575; font-size:25px">
							<tr>
								<td><img src=" ..\..\assets\images\donasi\bca.png" style="width: 300px;">
								</td>
								<td><b>5235175509</b><br>a.n. Lindungi Hutan</td>
							</tr>
							<tr>
								<td><img src="..\..\assets\images\donasi\bri.png" style="width: 300px;"></td>
								<td><b>1003849964</b><br>a.n. Lindungi Hutan</td>
							</tr>
							<tr>
								<td><img src="..\..\assets\images\donasi\mandiri.png" style="width: 300px;"></td>
								<td><b>1320387628942</b><br>a.n. Lindungi Hutan</td>
							</tr>
						</tbody>
					</table>
				<?php endif; }?>
			</div>
		</div>
	</section>

<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div style="width: 100%">
		<?= form_open_multipart() ?>
		<!-- <form> -->
		<div class="container mb-5 px-5">
			<div class="mt-3">
				<h3 class="text-center">Edit Data dan Foto Kelas</h3>
			</div>
			<div class="form-group">
				<label>Nama Kelas</label>
				<input type="hidden" name="id_class" value="<?= $kelas_byid->id_class ?>">
				<input type="text" class="form-control" name="nama_kelas" value="<?= $kelas_byid->nama_kelas ?>">
				<small class="form-text text-danger"><?= form_error('nama_kelas') ?></small>
			</div>
			<div class="form-group">
				<div class="card" style="width: 18rem;">
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->foto_bersama") ?>"
						class="py-2 px-2 edit-kelas card-img-top" id="output">
					<div class="card-body">
						<h5 class="card-title"><label>Foto Bersama</label></h5>
						<input type="file" class="form-control-file" name="foto_bersama"
							onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
						<input type="hidden" name="old_bersama" value="<?= $kelas_byid->foto_bersama ?>">
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_1") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output1">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 1</label></h5>
								<input type="file" class="form-control-file" name="kelompok_1"
									onchange="document.getElementById('output1').src = window.URL.createObjectURL(this.files[0])">
								<input type="hidden" name="old_1" value="<?= $kelas_byid->kelompok_1 ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_2") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output2">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 2</label></h5>
								<input type="file" class="form-control-file" name="kelompok_2"
									onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
								<input type="hidden" name="old_2" value="<?= $kelas_byid->kelompok_2 ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_3") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output3">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 3</label></h5>
								<input type="file" class="form-control-file" name="kelompok_3"
									onchange="document.getElementById('output3').src = window.URL.createObjectURL(this.files[0])">

								<input type="hidden" name="old_3" value="<?= $kelas_byid->kelompok_3 ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_4") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output4">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 4</label></h5>
								<input type="file" class="form-control-file" name="kelompok_4"
									onchange="document.getElementById('output4').src = window.URL.createObjectURL(this.files[0])">

								<input type="hidden" name="old_4" value="<?= $kelas_byid->kelompok_4 ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_5") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output5">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 5</label></h5>
								<input type="file" class="form-control-file" name="kelompok_5"
									onchange="document.getElementById('output5').src = window.URL.createObjectURL(this.files[0])">

								<input type="hidden" name="old_5" value="<?= $kelas_byid->kelompok_5 ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_6") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output6">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 6</label></h5>
								<input type="file" class="form-control-file" name="kelompok_6"
									onchange="document.getElementById('output6').src = window.URL.createObjectURL(this.files[0])">

								<input type="hidden" name="old_6" value="<?= $kelas_byid->kelompok_6 ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_7") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output7">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 7</label></h5>
								<input type="file" class="form-control-file" name="kelompok_7"
									onchange="document.getElementById('output7').src = window.URL.createObjectURL(this.files[0])">

								<input type="hidden" name="old_7" value="<?= $kelas_byid->kelompok_7 ?>">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="card" style="width: 18rem;">
							<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_8") ?>"
								class="py-2 px-2 edit-kelas card-img-top" id="output8">
							<div class="card-body">
								<h5 class="card-title"><label>Foto Kelompok 8</label></h5>
								<input type="file" class="form-control-file" name="kelompok_8"
									onchange="document.getElementById('output8').src = window.URL.createObjectURL(this.files[0])">

								<input type="hidden" name="old_8" value="<?= $kelas_byid->kelompok_8 ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="float-right">
				<a href="<?= base_url('admin/dashboard') ?>" class="btn btn-danger">Kembali</a>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		<!-- </form> -->
		<?= form_close() ?>
	</div>
</div>


<?php $this->load->view('__admin/foot_admin') ?>

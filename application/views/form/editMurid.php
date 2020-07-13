<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div style="width: 100%">
		<?= form_open_multipart() ?>
		<!-- <form> -->
		<div class="container mb-5 px-5">
			<div class="mt-3">
				<h3 class="text-center">Update Data dan Foto Murid</h3>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label>Nama Murid</label>
						<input type="hidden" name="id_student" value="<?= $detail_murid->id_student ?>">
						<input type="text" class="form-control" name="nama_murid"
							value="<?= $detail_murid->nama_murid ?>">
						<small class="form-text text-danger"><?= form_error('nama_murid') ?></small>
					</div>
					<div class="form-group">
							<label for="exampleFormControlSelect1">Kelas</label>
							<select class="form-control" id="exampleFormControlSelect1" name="kelas">
								<?php foreach($data_kelas as $dk) : ?>
									<?php if($dk->nama_kelas == $detail_murid->kelas) : ?>
										<option value="<?= $dk->nama_kelas ?>" selected><?= $dk->nama_kelas ?>
									</option>
									<?php else : ?>
										<option value="<?= $dk->nama_kelas ?>"><?= $dk->nama_kelas ?>
									</option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
					<div class="form-group">
						<label>Motto</label>
						<textarea class="form-control" name="motto" rows="3"><?= $detail_murid->motto ?></textarea>
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label>Tempat & Tanggal Lahir</label>
						<div class="row">
							<div class="col-5">
								<input type="text" class="form-control" name="tempat_lahir"
									value="<?= $detail_murid->tempat_lahir ?>">
							</div>
							<div class="col-7">
								<input type="date" class="form-control" name="tanggal_lahir"
									value="<?= $detail_murid->tanggal_lahir ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<div class="form-group">
								<label>Sosial Media</label>
								<input type="text" class="form-control" name="sosmed">
							</div>
						</div>
						<div class="col-7">
							<div class="form-group">
								<label>Nomor HandPhone</label>
								<input type="text" class="form-control" name="nomor_hp">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat" rows="3"><?= $detail_murid->alamat ?></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Foto Profil</label>
				<br>
				<img id="foto_murid" style="width:18rem"
					src="<?= base_url("assets/img/foto_profil/$detail_murid->foto_murid") ?>">
				<hr>
				<input type="file" class="form-control-file" name="foto_murid"
					onchange="document.getElementById('foto_murid').src = window.URL.createObjectURL(this.files[0])">
				<input type="hidden" name="old_murid" value="<?= $detail_murid->foto_murid ?>">
			</div>
			<div class="modal-footer">
				<a href="<?= base_url('admin/murid') ?>" class="btn btn-danger">Kembali</a>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		<!-- </form> -->
		<?= form_close() ?>
	</div>
</div>


<?php $this->load->view('__admin/foot_admin') ?>

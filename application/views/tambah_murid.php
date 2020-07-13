<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">
		<div class="container main-admin">
			<div class="alert alert-dark" role="alert">
				<h5 class="font-weight-light">Data Murid</h5>
			</div>
			<?php if ( $this->session->flashdata('hapusMurid') ) : ?>
			<div class=" alert mt-3 alert-danger alert-dismissible fade show" role="alert" style="width: 21rem;">
				Data Murid
				<strong>berhasil</strong> <?= $this->session->flashdata('hapusMurid'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<?php if ( $this->session->flashdata('editMurid') ) : ?>
			<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert"
				style="width: 20rem;">Data Murid
				<strong>berhasil</strong> <?= $this->session->flashdata('editMurid'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<?php if ( $this->session->flashdata('tambahMurid') ) : ?>
			<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert"
				style="width: 25rem;">Data Murid
				<strong>berhasil</strong> <?= $this->session->flashdata('tambahMurid'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<div class="row mt-3">
				<!-- form tambah ya -->
				<?= form_open_multipart() ?>
				<!-- <form> -->
				<div class="modal-body">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label>Nama Murid</label>
								<input type="text" class="form-control" name="nama_murid">
								<small class="form-text text-danger"><?= form_error('nama_murid') ?></small>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Kelas</label>
								<select class="form-control" id="exampleFormControlSelect1" name="kelas">
									<?php foreach($data_kelas as $dk) : ?>
									<option value="<?= $dk->nama_kelas ?>"><?= $dk->nama_kelas ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Motto</label>
								<textarea class="form-control" name="motto" rows="3"></textarea>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Tempat & Tanggal Lahir</label>
								<div class="row">
									<div class="col-5">
										<input type="text" class="form-control" name="tempat_lahir">
									</div>
									<div class="col-7">
										<input type="date" class="form-control" name="tanggal_lahir">
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
								<textarea class="form-control" name="alamat" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Foto Profil</label>
						<br>
						<img id="foto_murid" style="width:18rem">
						<hr>
						<input type="file" class="form-control-file" name="foto_murid"
							onchange="document.getElementById('foto_murid').src = window.URL.createObjectURL(this.files[0])">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<!-- </form> -->
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-wrapper -->

	<!-- Modal Tambah Kelas -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Guru</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

			</div>
		</div>
	</div>
</div>
</div>

<?php $this->load->view('__admin/foot_admin') ?>

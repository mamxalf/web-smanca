<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">
		<div class="container main-admin">
			<div class="alert alert-dark" role="alert">
				<h5 class="font-weight-light">Dashboard / Data Kelas</h5>
			</div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
				Tambah Data Kelas
			</button>
			<?php if ( $this->session->flashdata('hapusKelas') ) : ?>
			<div class=" alert mt-3 alert-danger alert-dismissible fade show" role="alert" style="width: 21rem;">
				Data Kelas
				<strong>berhasil</strong> <?= $this->session->flashdata('hapusKelas'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<?php if ( $this->session->flashdata('editKelas') ) : ?>
			<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert"
				style="width: 20rem;">Data Kelas
				<strong>berhasil</strong> <?= $this->session->flashdata('editKelas'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<?php if ( $this->session->flashdata('tambahKelas') ) : ?>
			<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert"
				style="width: 25rem;">Data Kelas
				<strong>berhasil</strong> <?= $this->session->flashdata('tambahKelas'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<div class="row mt-3">
				<?php foreach($data_kelas as $dk): ?>
				<div class="col-4">
					<div class="card">
						<img src="<?= base_url("assets/img/foto_kelas/$dk->foto_bersama") ?>"
							class="card-img-top py-3 px-3">
						<div class="card-body">
							<h5 class="card-title">Kelas : <?= $dk->nama_kelas ?></h5>
							<a href="<?= base_url("admin/dashboard/detailKelas/$dk->id_class") ?>"
								class="btn btn-success">Detail</a>
							<a href="<?= base_url("admin/dashboard/editKelas/$dk->id_class") ?>"
								class="btn btn-warning">Update</a>
							<a href="<?= base_url("admin/dashboard/deleteKelas/$dk->id_class") ?>"
								class="btn btn-danger"
								onclick="javascript: return confirm('Anda yakin hapus ?')">Delete</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
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
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Kelas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open_multipart() ?>
			<!-- <form> -->
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Kelas</label>
					<input type="text" class="form-control" name="nama_kelas">
					<small class="form-text text-danger"><?= form_error('nama_kelas') ?></small>
				</div>
				<div class="form-group">
					<label>Foto Bersama</label>
					<hr>
					<img class="py-2 px-2 card-img-top" id="foto_bersama" style="width: 17rem">
					<input type="file" class="form-control-file" name="foto_bersama"
						onchange="document.getElementById('foto_bersama').src = window.URL.createObjectURL(this.files[0])">
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label>Foto Kelompok 1</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok1" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_1"
								onchange="document.getElementById('kelompok1').src = window.URL.createObjectURL(this.files[0])">
						</div>
						<div class="form-group">
							<label>Foto Kelompok 2</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok2" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_2"
								onchange="document.getElementById('kelompok2').src = window.URL.createObjectURL(this.files[0])">
						</div>
						<div class="form-group">
							<label>Foto Kelompok 3</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok3" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_3"
								onchange="document.getElementById('kelompok3').src = window.URL.createObjectURL(this.files[0])">
						</div>
						<div class="form-group">
							<label>Foto Kelompok 4</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok4" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_4"
								onchange="document.getElementById('kelompok4').src = window.URL.createObjectURL(this.files[0])">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Foto Kelompok 5</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok5" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_5"
								onchange="document.getElementById('kelompok5').src = window.URL.createObjectURL(this.files[0])">
						</div>
						<div class="form-group">
							<label>Foto Kelompok 6</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok6" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_6"
								onchange="document.getElementById('kelompok6').src = window.URL.createObjectURL(this.files[0])">
						</div>
						<div class="form-group">
							<label>Foto Kelompok 7</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok7" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_7"
								onchange="document.getElementById('kelompok7').src = window.URL.createObjectURL(this.files[0])">
						</div>
						<div class="form-group">
							<label>Foto Kelompok 8</label>
							<hr>
							<img class="py-2 px-2 card-img-top" id="kelompok8" style="width: 17rem">
							<input type="file" class="form-control-file" name="kelompok_8"
								onchange="document.getElementById('kelompok8').src = window.URL.createObjectURL(this.files[0])">
						</div>
					</div>
				</div>
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

<?php $this->load->view('__admin/foot_admin') ?>

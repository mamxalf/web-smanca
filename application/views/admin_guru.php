<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">
		<div class="container main-admin">
			<div class="alert alert-dark" role="alert">
				<h5 class="font-weight-light">Data Guru</h5>
			</div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
				Tambah Data Guru
			</button>
			<?php if ( $this->session->flashdata('hapusGuru') ) : ?>
			<div class=" alert mt-3 alert-danger alert-dismissible fade show" role="alert" style="width: 21rem;">
				Data Guru
				<strong>berhasil</strong> <?= $this->session->flashdata('hapusGuru'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<?php if ( $this->session->flashdata('editGuru') ) : ?>
			<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert"
				style="width: 20rem;">Data Guru
				<strong>berhasil</strong> <?= $this->session->flashdata('editGuru'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<?php if ( $this->session->flashdata('tambahGuru') ) : ?>
			<div class="alert mt-3 alert-success container alert-dismissible fade show" role="alert"
				style="width: 25rem;">Data Guru
				<strong>berhasil</strong> <?= $this->session->flashdata('tambahGuru'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php endif; ?>
			<div class="row mt-3">
				<?php foreach($data_guru as $dg): ?>
				<div class="col-3">
					<div class="card" style="width: 14rem">
						<img src="<?= base_url("assets/img/foto_guru/$dg->foto_guru") ?>"
							class="card-img-top py-3 px-3 img-fluid" style="height: 20rem">
						<div class="card-body">
							<h5 class="card-title"><?= $dg->nama_guru ?></h5>
							<a href="<?= base_url("admin/guru/editGuru/$dg->id_teacher") ?>" class="btn btn-warning">Update</a>
							<a href="<?= base_url("admin/guru/deleteGuru/$dg->id_teacher") ?>"
								class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')">Delete</a>
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
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Guru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open_multipart() ?>
			<!-- <form> -->
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Kelas</label>
					<input type="text" class="form-control" name="nama_guru">
					<small class="form-text text-danger"><?= form_error('nama_guru') ?></small>
				</div>
				<div class="form-group">
                    <label>Foto Bersama</label>
                    <br>
                    <img id="foto_guru" style="width:18rem">
                    <hr>
					<input type="file" class="form-control-file" name="foto_guru" onchange="document.getElementById('foto_guru').src = window.URL.createObjectURL(this.files[0])">
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

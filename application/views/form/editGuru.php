<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div style="width: 100%">
		<?= form_open_multipart() ?>
		<!-- <form> -->
		<div class="container mb-5 px-5">
			<div class="mt-3">
				<h3 class="text-center">Update Data dan Foto Guru</h3>
			</div>
			<div class="form-group">
                <label>Nama Guru</label>
                <input type="hidden" name="id_teacher" value="<?= $data_guru->id_teacher ?>">
				<input type="text" class="form-control" name="nama_guru" value="<?= $data_guru->nama_guru ?>" style="width: 20rem">
				<small class="form-text text-danger"><?= form_error('nama_guru') ?></small>
			</div>
			<div class="form-group">
				<div class="card" style="width: 17rem;">
					<img src="<?= base_url("assets/img/foto_guru/$data_guru->foto_guru") ?>"
						class="py-2 px-2 edit-kelas card-img-top" id="output" style="height: 24rem">
					<div class="card-body">
						<h5 class="card-title"><label>Foto Guru</label></h5>
						<input type="file" class="form-control-file" name="foto_guru" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
						<input type="hidden" name="old_guru" value="<?= $data_guru->foto_guru ?>">
					</div>
				</div>
			</div>
			<hr>
			<div class="float-right mb-5">
				<a href="<?= base_url('admin/guru') ?>" class="btn btn-danger">Kembali</a>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		<!-- </form> -->
		<?= form_close() ?>
	</div>
</div>


<?php $this->load->view('__admin/foot_admin') ?>

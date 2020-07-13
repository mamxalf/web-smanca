<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">
		<div class="container">
			<div>
				<h5 class="text-center">Foto Bersama</h5>
				<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->foto_bersama") ?>"
					class="px-2 py-2 mx-auto d-block" style="width: 40rem">
            </div>
            <hr>
			<div class="row">
				<div class="col-6">
                <h5 class="text-center">Foto Kelompok 1</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_1") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
				</div>
				<div class="col-6">
                <h5 class="text-center">Foto Kelompok 2</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_2") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
                </div>
                <div class="col-6">
                <h5 class="text-center">Foto Kelompok 3</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_3") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
				</div>
				<div class="col-6">
                <h5 class="text-center">Foto Kelompok 4</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_4") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
                </div>
                <div class="col-6">
                <h5 class="text-center">Foto Kelompok 5</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_5") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
				</div>
				<div class="col-6">
                <h5 class="text-center">Foto Kelompok 6</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_6") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
                </div>
                <div class="col-6">
                <h5 class="text-center">Foto Kelompok 7</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_7") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
				</div>
				<div class="col-6">
                <h5 class="text-center">Foto Kelompok 8</h5>
					<img src="<?= base_url("assets/img/foto_kelas/$kelas_byid->kelompok_8") ?>"
						class="px-2 py-2 mx-auto d-block" style="width: 20rem">
				</div>
            </div>
            <hr>
            <div class="d-flex justify-content-end">
                <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-primary mx-1">Kembali</a>
                <a href="<?= base_url("admin/dashboard/editKelas/$kelas_byid->id_class") ?>" class="btn btn-warning mx-1">Update</a>
            </div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('__admin/foot_admin') ?>

<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">
		<div class="container main-admin">
			<div class="alert alert-dark" role="alert">
				<h5 class="font-weight-light">Data Murid</h5>
			</div>
			<div class="row mt-3">
				<?php foreach($data_kelas as $dk): ?>
				<div class="col-4">
					<div class="card">
						<img src="<?= base_url("assets/img/foto_kelas/$dk->foto_bersama") ?>"
							class="card-img-top py-3 px-3">
						<div class="card-body">
							<h5 class="card-title">Kelas : <?= $dk->nama_kelas ?></h5>
							<a href="<?= base_url("admin/murid/daftarMurid/$dk->nama_kelas") ?>"
								class="btn btn-success">Detail Murid</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('__admin/foot_admin') ?>

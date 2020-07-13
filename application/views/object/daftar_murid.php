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
				<?php foreach($data_murid as $dm): ?>
				<div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
					<div class="card" style="width: 17rem">
						<img src="<?= base_url("assets/img/foto_profil/$dm->foto_murid") ?>"
							class="card-img-top py-3 px-3 img-fluid" style="height: 24rem">
						<div class="card-body">
							<h5 class="card-title"><?= $dm->nama_murid ?></h5>
							<a href="<?= base_url("admin/murid/detailMurid/$dm->id_student") ?>"
								class="btn btn-success">Detail</a>
							<a href="<?= base_url("admin/murid/editMurid/$dm->id_student") ?>"
								class="btn btn-warning">Update</a>
							<a href="<?= base_url("admin/murid/deleteMurid/$dm->id_student") ?>" class="btn btn-danger"
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
</div>

<?php $this->load->view('__admin/foot_admin') ?>

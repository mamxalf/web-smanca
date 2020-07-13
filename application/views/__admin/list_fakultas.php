<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">

		<div class="container-fluid">
			<!-- Breadcrumbs-->
			<?php $this->load->view('__admin/breadcrumb'); ?>
		</div>

		<div class="main-admin">
			<h1 class="text-center">Data Fakultas</h1>
			<div class="container">
				<a href="<?= base_url('admin_fakultas/addFakultas') ?>" class="btn btn-primary mx-auto d-block"
					style="width: 15rem">Tambah Data Fakultas</a>
			</div>
			<div class="container">
				<?php if ( $this->session->flashdata('hapusfakultas') ) : ?>
				<div class="mx-auto alert mt-3 alert-danger alert-dismissible fade show" role="alert"
					style="width: 21rem;">Data
					Fakultas
					<strong>berhasil</strong> <?= $this->session->flashdata('hapusfakultas'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php endif; ?>
				<?php if ( $this->session->flashdata('editFakultas') ) : ?>
				<div class="alert mx-auto d-block mt-3 alert-success container alert-dismissible fade show" role="alert"
					style="width: 20rem;">Data Fakultas
					<strong>berhasil</strong> <?= $this->session->flashdata('editFakultas'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php endif; ?>
				<?php if ( $this->session->flashdata('tambahFakultas') ) : ?>
				<div class="alert mx-auto d-block mt-3 alert-success container alert-dismissible fade show" role="alert"
					style="width: 25rem;">Data Fakultas
					<strong>berhasil</strong> <?= $this->session->flashdata('tambahFakultas'); ?>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php endif; ?>
				<div class="row">
					<?php foreach($fakultas as $fklts) : ?>
					<div class="col-sm-4 py-3">
						<div class="card">
							<h5 class="text-center py-2">Thumhnail</h5>
							<img src="<?= base_url("assets/img/$fklts->gambar") ?>" class="card-img-top mx-auto" style="width: 50%" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?= $fklts->nama_fakultas ?></h5>
								<p class="card-text"><span class="font-weight-bold">Kode :
									</span><?= $fklts->kode_fakultas ?></p>
							</div>
							<div class="card-body">
								<a href="<?= base_url("admin_fakultas/editFakultas/$fklts->kode_fakultas") ?>"
									class="btn btn-success">Edit Data</a>
								<a href="<?= base_url("admin_fakultas/deleteFakultas/$fklts->kode_fakultas") ?>"
									class="btn btn-danger">Delete</a>
								<a href="<?= base_url("admin_prodi/showProdiByKodeFakultas/$fklts->kode_fakultas") ?>"
									class="btn btn-info">Detail Prodi</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('__admin/foot_admin') ?>

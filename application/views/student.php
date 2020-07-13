<?php $this->load->view('__partials/header'); ?>

<div class="bg">
	<?php $this->load->view('__partials/navbar'); ?>
	<div class="container">
		<div class="row">
			<?php foreach ($data_kelas as $dk) : ?>
			<div class="col-sm-4 my-3 mx-auto foto">
				<a href="<?= base_url("home/detailStudent/$dk->nama_kelas") ?> " style="text-decoration:none">
					<img src="<?= base_url("assets/img/foto_kelas/$dk->foto_bersama") ?>" style="width:25rem"
						class="img-thumbnail mx-auto foto-kelas">
					<div class="middle">
						<h4><?= $dk->nama_kelas ?></h4>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>




<?php $this->load->view('__partials/footer'); ?>

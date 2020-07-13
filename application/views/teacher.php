<?php $this->load->view('__partials/header'); ?>

<div class="bg">
	<?php $this->load->view('__partials/navbar'); ?>
	<div class="container">
		<div class="row">
			<?php foreach ($data_guru as $dg) : ?>
			<div class="col-sm-3 my-3 mx-auto">
					<div class="card mx-2 mx-auto guru" style="width: 15rem;">
						<img src="<?= base_url("assets/img/foto_guru/$dg->foto_guru") ?>" class="card-img-top img-thumbnail"
							alt="<?= $dg->foto_guru ?>">
						<div class="card-body card-guru">
							<?= $dg->nama_guru ?>
						</div>
					</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>




<?php $this->load->view('__partials/footer'); ?>

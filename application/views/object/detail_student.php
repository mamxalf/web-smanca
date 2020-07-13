<?php $this->load->view('__partials/header'); ?>

<div class="bg">
	<?php $this->load->view('__partials/navbar'); ?>
	<div class="container">
		<ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
			<li class="nav-item">
				<a class="nav-link btn btn-light active mx-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
					aria-controls="pills-home" aria-selected="true" style="color: black">Foto Kelompok</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn btn-light mx-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
					aria-controls="pills-profile" aria-selected="false" style="color: black">Foto Profil</a>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><img
					src="<?= base_url("assets/img/foto_kelas/$data_kelas->foto_bersama") ?>"
					class="img-thumbnail my-2 mx-auto d-flex" style="width: 35rem">
				<div class="row my-2">
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_1") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_2") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_3") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_4") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_5") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_6") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_7") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
					<div class="col-sm-4 mx-auto">
						<img src="<?= base_url("assets/img/foto_kelas/$data_kelas->kelompok_8") ?>"
							class="img-thumbnail my-2 mx-auto d-flex">
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				<div class="row">
					<div class="row row-cols-1 row-cols-md-3">
						<?php foreach ($data_student as $ds): ?>
						<div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-4">
							<div class="card">
								<img src="<?= base_url("assets/img/foto_profil/$ds->foto_murid") ?>"
									class="card-img-top mx-auto img-thumbnail">
								<div class="card-body">
									<h5 class="card-title text-center"><?= $ds->nama_murid ?></h5>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item" style="padding: 0.75rem 0.25rem">
											<?= $ds->tempat_lahir ?>,
											<?= $ds->tanggal_lahir ?></li>
										<li class="list-group-item" style="padding: 0.75rem 0.25rem"><?= $ds->alamat ?>
										</li>
										<li class="list-group-item" style="padding: 0.75rem 0.25rem">
											<?= $ds->nomor_hp ?></li>
										<li class="list-group-item" style="padding: 0.75rem 0.25rem"><?= $ds->sosmed ?>
										</li>
										<li class="list-group-item" style="padding: 0.75rem 0.25rem"><?= $ds->motto ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>


		<!-- pisah -->

	</div>
</div>




<?php $this->load->view('__partials/footer'); ?>

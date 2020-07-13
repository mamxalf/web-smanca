<?php $this->load->view('__admin/head_admin') ?>

<?php $this->load->view('__admin/nav_admin') ?>

<div id="wrapper">

	<?php $this->load->view('__admin/sidebar_admin') ?>

	<div id="content-wrapper">
		<div class="row mx-5">
			<div class="col-4">
                <img class="img-fluid img-thumbnail" src="<?= base_url("assets/img/foto_profil/$detail_murid->foto_murid") ?>">
			</div>
			<div class="col-8">
				<ul class="list-group mb-3">
                    <li class="list-group-item"><span class="font-weight-bold">Nama : </span><?= $detail_murid->nama_murid ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Kelas : </span><?= $detail_murid->kelas ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">TTL : </span><?= $detail_murid->tempat_lahir.", ".$detail_murid->tanggal_lahir ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Alamat : </span><?= $detail_murid->alamat ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Nomor HP : </span><?= $detail_murid->nomor_hp ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Sosial Media : </span><?= $detail_murid->sosmed ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Motto Hidup : </span><?= $detail_murid->motto ?></li>
                </ul>
                <a href="<?= base_url("admin/murid/editMurid/$detail_murid->id_student") ?>" class="btn btn-warning">Update</a>
                <a href="<?= base_url("admin/murid/deleteMurid/$detail_murid->id_student") ?>" class="btn btn-danger">Delete</a>
                <a href="<?= base_url("admin/murid/daftarMurid/$detail_murid->kelas") ?>" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('__admin/foot_admin') ?>

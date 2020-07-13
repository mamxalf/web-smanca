<?php $this->load->view('__partials/header'); ?>

<div class="bg">
	<br><br>
	<div class="container">
		<div class="contact-us">
			<h1 class="pt-2 text-center">Contact Us!</h1>
			<div class="row py-4 px-5">
				<div class="col-md-6 py-3">
					<div class="google-maps">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15832.969150212477!2d110.053411!3d-7.2131787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf06a20b838fcb7a0!2sSMAN%201%20Candiroto!5e0!3m2!1sen!2sid!4v1580920053318!5m2!1sen!2sid"
							width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-md-6 py-3">
					<!--Form with header-->
					<form action="https://formspree.io/moqdwydk" method="post">
						<div class="card rounded-0">
							<div class="card-header p-0">
								<div class="bg-contact text-white text-center py-2">
									<h6><i class="fa fa-envelope"></i> Kirim Email Kepada Kami</h6>
								</div>
							</div>
							<div class="card-body p-3">
								<!--Body-->
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-user text-color-icon"></i></div>
										</div>
										<input type="text" class="form-control" id="nombre" name="name"
											placeholder="Nama Kamu!" required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-envelope text-color-icon"></i></div>
										</div>
										<input type="email" class="form-control" id="nombre" name="_replyto"
											placeholder="example@gmail.com" required>
									</div>
								</div>

								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-comment text-color-icon"></i></div>
										</div>
										<textarea class="form-control" placeholder="Pesan Kamu!" name="message"
											required></textarea>
									</div>
								</div>

								<div class="text-center">
									<input type="submit" value="Kirim" class="btn bg-button-contact text-white font-weight-bold btn-block rounded-0 py-2">
								</div>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
		<?php $this->load->view('__partials/navbar'); ?>
	</div>
</div>




<?php $this->load->view('__partials/footer'); ?>

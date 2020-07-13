<div class="container py-3">
	<nav class="navbar navbar-expand-lg navbar-light mx-auto" style="width: 50%; background-color:#ffffff">
		<button class="navbar-toggler mx-auto" type="button" data-toggle="modal" data-target="#exampleModalCenter"
			aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
				<li class="nav-item font-nav">
					<a class="nav-link" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item font-nav">
					<a class="nav-link" href="<?= base_url('home/greetings') ?>">Greeting</a>
				</li>
				<li class="nav-item font-nav">
					<a class="nav-link" href="<?= base_url('home/teacher') ?>">Teacher</a>
				</li>
				<li class="nav-item font-nav">
					<a class="nav-link" href="<?= base_url('home/student') ?>">Student</a>
				</li>
				<li class="nav-item font-nav">
					<a class="nav-link" href="<?= base_url('home/contact') ?>">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content mx-auto">
				<div class="modal-body">
					<ul class="navbar-nav">
						<li class="nav-item mx-auto">
							<a class="nav-link" href="<?= base_url() ?>">Home</a>
						</li>
						<li class="nav-item mx-auto">
							<a class="nav-link" href="<?= base_url('home/greetings') ?>">Greeting</a>
						</li>
						<li class="nav-item mx-auto">
							<a class="nav-link" href="<?= base_url('home/teacher') ?>">Teacher</a>
						</li>
						<li class="nav-item mx-auto">
							<a class="nav-link" href="<?= base_url('home/student') ?>">Student</a>
						</li>
						<li class="nav-item mx-auto">
							<a class="nav-link" href="<?= base_url('home/contact') ?>">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

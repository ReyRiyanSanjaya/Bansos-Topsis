<?php
if (isset($this->session->userdata['logged_in'])) {
	header("location: https://localhost/harya2/user/proses_login");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Penggunaan Metode Topsis</title>
	<link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('asset/custom/custom.css') ?>">

	<!-- Libs CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/libs.bundle.css'); ?>" />

	<!-- 
      Theme Sans Serif CSS
      Remove the "disabled" attribute if you want to enable Sans Serif for headings.
    -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-sans-serif.bundle.css'); ?>" id="themeSansSerif" disabled />

	<!--
      Demo JS
      Remove the code below on a production website.
    -->
	<script src="<?php echo base_url('assets/js/demo.bundle.js'); ?>"></script>

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.bundle.css'); ?>" />
</head>

<body>


	<?php
	if (isset($logout_message)) {
		echo "<div class='message'>";
		echo $logout_message;
		echo "</div>";
	}
	?>
	<?php
	if (isset($message_display)) {
		echo "<div class='message'>";
		echo $message_display;
		echo "</div>";
	}
	?>


	<!-- MODALS -->
	<!-- Sign in -->
	<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" aria-labelledby="modalSignInHeading" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body text-center">

					<!-- Close -->
					<button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>

					<!-- Heading -->
					<h1 class="mb-4" id="modalSignInHeading">
						Masuk
					</h1>

					<!-- Text -->
					<p>
						Tidak punya akun? <a href="<?php echo base_url('auth/registrasi'); ?>">Daftar</a>
					</p>

					<!-- Form -->
					<form class="mb-6" action="<?php echo base_url('auth/proses_login');?>" method="post">
						<!-- Email -->
						<div class="form-group">
							<label class="visually-hidden" for="signInEmail">
								Nik anda
							</label>
							<input class="form-control" name="nik" id="signInEmail" type="text" placeholder="Nik Anda" require>
						</div>

						<!-- Password -->
						<div class="form-group">
							<div class="input-group inpit-group-merge">
								<input class="form-control" id="signInPassword" placeholder="Password kamu" type="password" aria-label="Your password" require aria-describedby="signInPasswordCaption" name="password">
								<a class="input-group-text text-decoration-none text-gray-500" id="signInPasswordCaption" data-toggle="password" href="#signInPassword">
									<i class="fe fe-eye"></i>
								</a>
							</div>
						</div>

						<!-- Button -->
						<button class="btn w-100 btn-primary" type="submit" name="login">
							Masuk
						</button>

					</form>

					<!-- Link -->
					<a class="fs-sm" href="password-reset.html">
						Lupa Password
					</a>

				</div>
			</div>
		</div>
	</div>
	<!-- modal  -->

	<div class="header-custom fixed-top">
		<nav class="navbar navbar-expand-lg navbar bg-light mr-5 ml-5 rounded-pill p-2" style="background-color: #fff !important; box-shadow: 0px 4px 16px rgb(0 0 0 / 10%) !important;">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo base_url('home') ?>">BANSOS TOPSIS</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo base_url('home') ?>">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('home/tentang'); ?>">Tentang</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('home'); ?>#cara-daftar">Cara Daftar</a>
						</li>
						<li class="nav-item">
							<button type="button" class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal" href="#modalSignIn">Login/Daftar</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

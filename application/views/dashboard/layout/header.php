<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="bansos" />

	<style>
		body {
			display: none;
		}
	</style>
	<link rel="stylesheet" href="<?php echo base_url('asset/custom/dashboard.css'); ?>">
	<!-- Title -->
	<title><?= $title ?></title>
	<!-- Libs CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/libs.bundle.css'); ?>" />

	<!-- fontawesome  -->
	<link href="<?php echo base_url('asset/fontawesome/css/all.css'); ?>" rel="stylesheet">
	<script defer src="<?php echo base_url('asset/fontawesome/js/all.js') ?>"></script>
	<!--load all styles -->

	<link href="<?php echo base_url('asset/fontawesome/css/fontawesome.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/fontawesome/css/brands.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/fontawesome/css/solid.css') ?>" rel="stylesheet">

	<!-- tambahan  -->
	<script src="<?php echo base_url('asset/topsis/js/jquery.min.js') ?>"></script>
	<link href="<?php echo base_url('asset/topsis/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
	<script src="<?php echo base_url('asset/topsis/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/topsis/js/jquery.dataTables.min.js') ?>"></script>    
	


	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-sans-serif.bundle.css'); ?>" id="themeSansSerif" disabled />


	<script src="<?php echo base_url('assets/js/demo.bundle.js'); ?>"></script>

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.bundle.css'); ?>" />
</head>

<body>

	<div class="app-container">
		<div class="app-header">
			<div class="app-header-left">
				<span class="app-icon"></span>
				<a class="app-name" href="<?php echo base_url('home'); ?>" style="text-decoration: none;">SPK TOPSIS</a>
				<div class="search-wrapper">
					<!-- pencarian  -->
					<input class="search-input" type="text" placeholder="Cari Data">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
						<defs></defs>
						<circle cx="11" cy="11" r="8"></circle>
						<path d="M21 21l-4.35-4.35"></path>
					</svg>
				</div>
			</div>

			<!-- mode gelap  -->
			<div class="app-header-right">
				<button class="mode-switch" title="Switch Theme">
					<svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
						<defs></defs>
						<path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
					</svg>
				</button>

				<!-- tooltip  -->
				<button class="notification-btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
						<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
						<path d="M13.73 21a2 2 0 0 1-3.46 0" />
					</svg>
				</button>
				<!-- tooltip  -->


				<!-- profil pengguna  -->
				<button class="profile-btn">
					<img src="<?php echo base_url('asset/gambar/') . $user['poto'] ?>" />
					<span><?= $user['nama'] ?></span>
				</button>
				<!-- profil pengguna  -->


			</div>
			<button class="messages-btn">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
					<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
				</svg>
			</button>
		</div>

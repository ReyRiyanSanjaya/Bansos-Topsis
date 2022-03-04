 <!-- BODY -->
 <main class="border-multicolor">
 	<div class="container-lg d-flex flex-column">
 		<div class="row align-items-center justify-content-center min-vh-100 py-10 py-md-12 mt-n1">
 			<div class="col-12 col-md-7 col-lg-5 text-center">

 				<!-- Heading -->
 				<h1 class="display-3 mb-4">
 					Buat Akun
 				</h1>

 				<!-- Text -->
 				<p class="text-muted">
 					Buat akunmu untuk mendaftar pada program bantuan sosial pemerintah 2021
 				</p>

 				<!-- Form -->
 				<form class="mb-6" method="post" action="<?php echo base_url('auth/registrasi'); ?>">


 					<div class="form-group">
 						<label class="visually-hidden">
 							NIK anda
 						</label>
 						<?= form_error('nik', '<small class="text-danger" role="alert">', '</small>') ?>
 						<input class="form-control" name="nik" type="text" placeholder="NIK anda" value="<?=  set_value('nik'); ?>">
 					</div>

 					<div class="form-group">
 						<label class="visually-hidden">
 							Nama anda
 						</label>
 						<?= form_error('nama', '<small class="text-danger" role="alert">', '</small>') ?>
 						<input class="form-control" name="nama" type="text" placeholder="nama anda" <?= set_value('nama'); ?>>
 					</div>

 					<!-- Password -->
 					<div class="form-group">
 						<div class="input-group inpit-group-merge">
 							<input name="password" class="form-control" id="authPassword" placeholder="Password anda" type="password" aria-label="Your password" aria-describedby="authPasswordCaption" <?= set_value('password'); ?>>
 							<a class="input-group-text text-decoration-none text-gray-500" id="authPasswordCaption" data-toggle="password" href="#authPassword">
 								<i class="fe fe-eye"></i>
 							</a>
 						</div>
						 <?= form_error('password', '<small class="text-danger" role="alert">', '</small>') ?>
 					</div>

 					<!-- Button -->
 					<button class="btn w-100 btn-primary" type="submit">
 						Buat Akun
 					</button>

 				</form>

 				<!-- Text -->
 				<small class="text-muted">
 					Sudah punya akun? <a data-bs-toggle="modal" href="#modalSignIn">Login</a>
 				</small>

 			</div>
 		</div>
 	</div>
 </main>

 <!-- BODY -->
 <main class="border-multicolor">
 	<div class="container-lg d-flex flex-column">
 		<div class="row align-items-center justify-content-center min-vh-100 py-10 py-md-12 mt-n1">
 			<div class="col-12 col-md-7 col-lg-5 text-center">

			 <?= $this->session->flashdata('message'); ?>
			 <!-- alert tela mendaftar  -->

 				<!-- Heading -->
 				<h1 class="display-3 mb-4">
 					Masuk
 				</h1>

 				<!-- Text -->
 				<p class="text-muted">
 					Tidak punya akun? <a href="<?php echo base_url('home/registrasi'); ?>">Daftar</a>
 				</p>

 				<!-- Form -->
				 <form class="mb-6" method="post" action="<?php echo base_url('auth/proses_login');?>">
 					<div class="form-group">
					 <?= form_error('nik', '<small class="text-danger" role="alert">', '</small>'); ?>
 						<input class="form-control" id="authEmail" type="text" name="nik" placeholder="NIK anda">
 					</div>

 					<!-- Password -->
 					<div class="form-group">
 						<div class="input-group inpit-group-merge">
 							<input class="form-control" id="signInPassword" placeholder="Password kamu" type="password" aria-label="Your password" aria-describedby="signInPasswordCaption" name="password">
 							<a class="input-group-text text-decoration-none text-gray-500" id="signInPasswordCaption" data-toggle="password" href="#signInPassword">
 								<i class="fe fe-eye"></i>
 							</a>
 						</div>
 					</div>

 					<!-- Button -->
 					<button type="submit" name="login" class="btn w-100 btn-primary">
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
 </main>

<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>

	<section class="pt-6 pt-md-10">
		<div class="container-lg">
			<div class="row align-items-center">
				<div class="col-md-6 col-xl-5 text-center text-md-start mt-md-n8" data-aos="fade-up">

					<?= $this->session->flashdata('message'); ?>
					<!-- alert  -->	

					<!-- Heading -->
					<h1 class="display-3 mb-4">
						Anda bisa <span class="text-primary-light text-underline-primary-light d-none d-lg-inline">

							<span data-typed='{"strings": ["Ubah Password", "Ubah Nik", "Ubah Photo"]}'></span></span><span class="text-primary-light text-underline-primary-light d-lg-none">Ubah Password</span>
					</h1>

					<!-- Text -->
					<p class="fs-lg">
						Silahkan merubah password, ubah nik ataupun ubah photo anda.
					</p>

					<!-- Buttons -->
					<div class="mb-8 mb-md-0">
						<a class="btn btn-primary-light lift" href="<?php echo base_url(''); ?>admin/setting_user">
							Ubah Sekarang
						</a>
					</div>

				</div>
				<div class="col-md-5 offset-md-1 offset-xl-2 align-self-start d-none d-md-block">

					<a data-bigpicture='{"imgSrc": "<?php echo base_url('asset/gambar/') . $user['poto'] ?>"}' href="#" class="d-block mb-3 mb-md-0">
						<img class="img-fluid rounded-top-start-3 rounded-top-end-3 shadow-lg" src="<?php echo base_url('asset/gambar/') . $user['poto'] ?>" alt="..." data-aos="fade-up" data-aos-delay="100">
					</a>

				</div>
				<div class="col-md-4 offset-md-n4">

					<!-- Image -->
					<div class="position-relative">

						<!-- Decoration -->
						<div class="position-absolute bottom-end text-primary-light me-n8 mb-n6" data-aos="fade-up" data-aos-delay="150">
							<svg width="185" height="186" viewBox="0 0 185 186" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="2" cy="2" r="2" fill="currentColor" />
								<circle cx="22" cy="2" r="2" fill="currentColor" />
								<circle cx="42" cy="2" r="2" fill="currentColor" />
								<circle cx="62" cy="2" r="2" fill="currentColor" />
								<circle cx="82" cy="2" r="2" fill="currentColor" />
								<circle cx="102" cy="2" r="2" fill="currentColor" />
								<circle cx="122" cy="2" r="2" fill="currentColor" />
								<circle cx="142" cy="2" r="2" fill="currentColor" />
								<circle cx="162" cy="2" r="2" fill="currentColor" />
								<circle cx="182" cy="2" r="2" fill="currentColor" />
								<circle cx="2" cy="22" r="2" fill="currentColor" />
								<circle cx="22" cy="22" r="2" fill="currentColor" />
								<circle cx="42" cy="22" r="2" fill="currentColor" />
								<circle cx="62" cy="22" r="2" fill="currentColor" />
								<circle cx="82" cy="22" r="2" fill="currentColor" />
								<circle cx="102" cy="22" r="2" fill="currentColor" />
								<circle cx="122" cy="22" r="2" fill="currentColor" />
								<circle cx="142" cy="22" r="2" fill="currentColor" />
								<circle cx="162" cy="22" r="2" fill="currentColor" />
								<circle cx="182" cy="22" r="2" fill="currentColor" />
								<circle cx="2" cy="42" r="2" fill="currentColor" />
								<circle cx="22" cy="42" r="2" fill="currentColor" />
								<circle cx="42" cy="42" r="2" fill="currentColor" />
								<circle cx="62" cy="42" r="2" fill="currentColor" />
								<circle cx="82" cy="42" r="2" fill="currentColor" />
								<circle cx="102" cy="42" r="2" fill="currentColor" />
								<circle cx="122" cy="42" r="2" fill="currentColor" />
								<circle cx="142" cy="42" r="2" fill="currentColor" />
								<circle cx="162" cy="42" r="2" fill="currentColor" />
								<circle cx="182" cy="42" r="2" fill="currentColor" />
								<circle cx="2" cy="62" r="2" fill="currentColor" />
								<circle cx="22" cy="62" r="2" fill="currentColor" />
								<circle cx="42" cy="62" r="2" fill="currentColor" />
								<circle cx="62" cy="62" r="2" fill="currentColor" />
								<circle cx="82" cy="62" r="2" fill="currentColor" />
								<circle cx="102" cy="62" r="2" fill="currentColor" />
								<circle cx="122" cy="62" r="2" fill="currentColor" />
								<circle cx="142" cy="62" r="2" fill="currentColor" />
								<circle cx="162" cy="62" r="2" fill="currentColor" />
								<circle cx="182" cy="62" r="2" fill="currentColor" />
								<circle cx="2" cy="82" r="2" fill="currentColor" />
								<circle cx="22" cy="82" r="2" fill="currentColor" />
								<circle cx="42" cy="82" r="2" fill="currentColor" />
								<circle cx="62" cy="82" r="2" fill="currentColor" />
								<circle cx="82" cy="82" r="2" fill="currentColor" />
								<circle cx="102" cy="82" r="2" fill="currentColor" />
								<circle cx="122" cy="82" r="2" fill="currentColor" />
								<circle cx="142" cy="82" r="2" fill="currentColor" />
								<circle cx="162" cy="82" r="2" fill="currentColor" />
								<circle cx="182" cy="82" r="2" fill="currentColor" />
								<circle cx="2" cy="102" r="2" fill="currentColor" />
								<circle cx="22" cy="102" r="2" fill="currentColor" />
								<circle cx="42" cy="102" r="2" fill="currentColor" />
								<circle cx="62" cy="102" r="2" fill="currentColor" />
								<circle cx="82" cy="102" r="2" fill="currentColor" />
								<circle cx="102" cy="102" r="2" fill="currentColor" />
								<circle cx="122" cy="102" r="2" fill="currentColor" />
								<circle cx="142" cy="102" r="2" fill="currentColor" />
								<circle cx="162" cy="102" r="2" fill="currentColor" />
								<circle cx="182" cy="102" r="2" fill="currentColor" />
								<circle cx="2" cy="122" r="2" fill="currentColor" />
								<circle cx="22" cy="122" r="2" fill="currentColor" />
								<circle cx="42" cy="122" r="2" fill="currentColor" />
								<circle cx="62" cy="122" r="2" fill="currentColor" />
								<circle cx="82" cy="122" r="2" fill="currentColor" />
								<circle cx="102" cy="122" r="2" fill="currentColor" />
								<circle cx="122" cy="122" r="2" fill="currentColor" />
								<circle cx="142" cy="122" r="2" fill="currentColor" />
								<circle cx="162" cy="122" r="2" fill="currentColor" />
								<circle cx="182" cy="122" r="2" fill="currentColor" />
								<circle cx="2" cy="142" r="2" fill="currentColor" />
								<circle cx="22" cy="142" r="2" fill="currentColor" />
								<circle cx="42" cy="142" r="2" fill="currentColor" />
								<circle cx="62" cy="142" r="2" fill="currentColor" />
								<circle cx="82" cy="142" r="2" fill="currentColor" />
								<circle cx="102" cy="142" r="2" fill="currentColor" />
								<circle cx="122" cy="142" r="2" fill="currentColor" />
								<circle cx="142" cy="142" r="2" fill="currentColor" />
								<circle cx="162" cy="142" r="2" fill="currentColor" />
								<circle cx="182" cy="142" r="2" fill="currentColor" />
								<circle cx="2" cy="162" r="2" fill="currentColor" />
								<circle cx="22" cy="162" r="2" fill="currentColor" />
								<circle cx="42" cy="162" r="2" fill="currentColor" />
								<circle cx="62" cy="162" r="2" fill="currentColor" />
								<circle cx="82" cy="162" r="2" fill="currentColor" />
								<circle cx="102" cy="162" r="2" fill="currentColor" />
								<circle cx="122" cy="162" r="2" fill="currentColor" />
								<circle cx="142" cy="162" r="2" fill="currentColor" />
								<circle cx="162" cy="162" r="2" fill="currentColor" />
								<circle cx="182" cy="162" r="2" fill="currentColor" />
								<circle cx="2" cy="182" r="2" fill="currentColor" />
								<circle cx="22" cy="182" r="2" fill="currentColor" />
								<circle cx="42" cy="182" r="2" fill="currentColor" />
								<circle cx="62" cy="182" r="2" fill="currentColor" />
								<circle cx="82" cy="182" r="2" fill="currentColor" />
								<circle cx="102" cy="182" r="2" fill="currentColor" />
								<circle cx="122" cy="182" r="2" fill="currentColor" />
								<circle cx="142" cy="182" r="2" fill="currentColor" />
								<circle cx="162" cy="182" r="2" fill="currentColor" />
								<circle cx="182" cy="182" r="2" fill="currentColor" />
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>


</div>
</div>

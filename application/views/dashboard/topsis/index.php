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
				<div class="text-center text-md-start mt-md-n8" data-aos="fade-up">

					<?= $this->session->flashdata('message'); ?>
					<!-- alert  -->

					<!-- Heading -->
					<h1 class="display-3">
						Lihat Hasil <span class="text-primary-light text-underline-primary-light d-none d-lg-inline">

							<span data-typed='{"strings": ["Perhitungan Topsis", "Rangkin Penerima Bantuan Sosial Pemerintah Tahun 2022"]}'></span></span>
				</div>

			</div>
			<br><br><br>
			<div class="row align-items-center">
				<div class="col-md-6 col-xl-5 text-center text-md-start mt-md-n8" data-aos="fade-up">
					<!-- Buttons -->
					<div class="mb-8 mb-md-0">
						<a class="btn btn-info lift" href="<?php echo base_url(''); ?>hasil/perhitungan.php">
							Lihat Perhitungan Topsis
						</a>

					</div>

					<div class="mb-8 mb-md-0 mt-lg-4">
						<a class="btn btn-primary-light lift" href="<?php echo base_url(''); ?>hasil/rangking.php">
							Lihat Ranking Penerima
						</a>
					</div>

				</div>

			</div>

			<div class="col-md-5">
				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
				<lottie-player style="position:absolute; left:70%; top:-295px; width: 900px; height: 900px;" src="https://assets4.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
			</div>

		</div>


	</section>


</div>
</div>

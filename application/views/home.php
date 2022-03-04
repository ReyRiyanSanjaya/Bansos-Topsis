
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-in" data-aos-delay="150">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo base_url('asset/gambar/1.png') ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h2>Pengajuan Bantuan Sosial</h2>
				<p>Daftarkan keluargamu untuk mendapatkan bantuan sosial tahun 2021</p>
			</div>

		</div>
		<div class="carousel-item">
			<img src="<?php echo base_url('asset/gambar/2.png') ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h2>Cek Pendaftaran</h2>
				<p>Cek sekarang di website ini, apakah kamu penerima bantuan sosial</p>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
<div class="custom-pencarian" data-aos="fade-in" data-aos-delay="250">
	<div class="container-fluid ">
		<h2>Cek Status Pendaftaran</h2>
		<p>Silahkan cek status pendaftaran pengajuan penerima bantuan sosial disini dengan memasukan nama dan NIK anda</p>
		<hr>
	</div>
	<div class="container-fluid">
		<form class="row g-3">
			<div class="col">
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="floatingInput" placeholder="1271140102990003">
					<label for="floatingInput">Masukan NIK anda</label>
				</div>
			</div>
			<div class="col">
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="floatingInput" placeholder="Harya Syafneldi">
					<label for="floatingInput">Masukan nama anda</label>
				</div>
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary" data-aos="fade-in" data-aos-delay="350">Cek Pendaftaran</button>
			</div>
		</form>
	</div>

	<br><hr>
	<div class="container-fluid justify-content-center">
		<p>Silahkan daftar terlebih dahulu untuk mengecek apakah anda penerima bantuan sosial <a href="<?php echo base_url('auth/registrasi') ?>"><span class="badge bg-primary" data-aos="fade-in" data-aos-delay="350">Disini</span></a></p>
		<hr>
	</div>
</div>
<hr>

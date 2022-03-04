<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>

	<div class="projects-section-line">
		<div class="projects-status">
			<div class="item-status">
			<span class="status-number"><span data-countup='{"startVal": 0}' data-to="17"></span></span>
				<span class="status-type">Data Masyarakat yang terdaftar</span>
			</div>
		</div>
	</div>



	<form action="<?php echo base_url('admin/edit_data')?>" method="post">
	<div class="form-floating mb-3 visually-hidden">
			<input name="id" class="form-control" placeholder="name@example.com" value="<?php echo $editdatawarga->id; ?>">
			<label for="floatingInput"><?php echo $editdatawarga->id; ?></label>
		</div>
		<div class="form-floating mb-3">
			<input name="nik" class="form-control" placeholder="name@example.com">
			<label for="floatingInput"><?php echo $editdatawarga->nik; ?></label>
		</div>
		<div class="form-floating">
			<input name="nama" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->nama; ?></label>
		</div>
		<div class="form-floating">
			<input name="alamat"  class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->alamat; ?></label>
		</div>
		<div class="form-floating">
			<input name="photo"  class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatawarga->photo; ?></label>
		</div>
		<button class="btn btn-primary center" type="submit">
			Edit Data
		</button>
	</form>

</div>

</div>
</div>

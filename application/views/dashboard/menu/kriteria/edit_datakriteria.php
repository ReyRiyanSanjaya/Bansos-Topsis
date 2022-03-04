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
				<span class="status-number">6</span>
				<span class="status-type">Data Kriteria</span>
			</div>
		</div>
	</div>



	<form action="<?php echo base_url('admin/edit_datak') ?>" method="post">
		<div class="form-floating mb-3 visually-hidden">
			<input name="id_kriteria" class="form-control" placeholder="name@example.com" value="<?php echo $editdatakriteria->id_kriteria; ?>">
			<label for="floatingInput"><?php echo $editdatakriteria->id_kriteria; ?></label>
		</div>
		<div class="form-floating">
			<input name="atribut" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatakriteria->atribut; ?></label>
		</div>
		<div class="form-floating">
			<input name="bobot_nilai" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatakriteria->bobot_nilai; ?></label>
		</div>
		<div class="form-floating">
			<input name="nama_kriteria" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatakriteria->nama_kriteria; ?></label>
		</div>
		<br>
		<button class="btn btn-primary center" type="submit">
			Edit Kriteria
		</button>
	</form>

</div>

</div>
</div>

<div class="projects-section">
	<div class="projects-section-header">
		<p><?= $title ?></p>
		<?php
		date_default_timezone_set('Asia/Jakarta');
		?>
		<p class="time"><?php echo date('l, d-m-Y'); ?></p>
	</div>

	<form action="<?php echo base_url('admin/edit_datap') ?>" method="post" class="overflow-hidden">

		<?php foreach ($datasurvey as $ds) { ?>
			<div class="row mb-3 gy-2 gx-3 align-items-center">
				<div class="col auto">
					<label class="input-group-text" for="inputGroupSelect01"><?php echo $ds->nama_kriteria ?> :
				</div>
				<div class="col-auto">
					<label class="visually-hidden" for="autoSizingSelect">Preference</label>
					<select class="form-select" aria-label="Default select example">
						<option selected>Open this select menu</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>
				</div>
			</div>

		<?php } ?>

		<hr><br>
		<button class="btn btn-primary align-items-center" type="submit">
			Simpan
		</button>
		
	</form>

</div>

</div>
</div>

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



	<form action="<?php echo base_url('admin/edit_datap') ?>" method="post">
		<div class="form-floating mb-3 visually-hidden">
			<input name="id_petugas" class="form-control" placeholder="name@example.com" value="<?php echo $editdatapetugas->id_petugas; ?>">
			<label for="floatingInput"><?php echo $editdatapetugas->id_petugas; ?></label>
		</div>
		<div class="form-floating">
			<input name="nama" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatapetugas->nama; ?></label>
		</div>
		<div class="form-floating">
			<input name="no_hp" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatapetugas->no_hp; ?></label>
		</div>
		<div class="form-floating">
			<input name="photo" class="form-control" placeholder="Password">
			<label for="floatingPassword"><?php echo $editdatapetugas->photo; ?></label>
		</div>
		<select name="status" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
			<option value="0">Tidak Aktif</option>
			<option value="1">Aktif</option>
		</select>
		<button class="btn btn-primary center" type="submit">
			Edit Data
		</button>
	</form>

</div>

</div>
</div>

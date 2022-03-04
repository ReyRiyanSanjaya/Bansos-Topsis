	<!-- MODALS -->
	<div class="modal fade" id="modalTambahData" tabindex="-1" role="dialog" aria-labelledby="modalSignInHeading" aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body text-center">

					<!-- Close -->
					<button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>

					<!-- Heading -->
					<h1 class="mb-4" id="modalSignInHeading">
						Tambah Data
					</h1>

					<!-- Form -->
					<form class="mb-6" action="<?php echo base_url('admin/tambah_data_petugas'); ?>" method="post">
						<!-- Email -->

						<div class="form-group">
							<input class="form-control" name="nama" type="text" placeholder="Nama" require>
						</div>

						<div class="form-group">
							<input class="form-control" name="no_hp" type="text" placeholder="No Handphone" require>
						</div>

						<div class="form-group">
							<input class="form-control" name="photo" type="text" placeholder="Photo" require>
						</div>

						<!-- Button -->
						<button class="btn w-100 btn-primary" type="submit">
							Tambah Data
						</button>

					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- modal  -->


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
				<?= $this->session->flashdata('message'); ?>
			 <!-- alert  -->
			 <span class="status-number"><span data-countup='{"startVal": 0}' data-to="17"></span></span>
					<span class="status-type">Data Kriteria</span>
				</div>

			</div>

		</div>


		<div class="page-wrapper overflow-auto">
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-block">

								<div class="table-responsive">
									<table id="datatable" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Atribut</th>
												<th>Bobot Nilai</th>
												<th>Nama Kriteria</th>
												<th>action</th>
										</thead>
										<tbody>

											<?php
											$count = 0;
											foreach ($datakriteria as $row) {
												$count = $count + 1;
											?>

												<tr>
													<td><?php echo $count; ?></td>
													<td><?php echo $row->atribut ?></td>
													<td><?php echo $row->bobot_nilai ?></td>
													<td><?php echo $row->nama_kriteria ?></td>
									
													<td style="width: 20%" style="width: 30%"> <a class='btn btn-info btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ubah Kriteria"  href="<?php echo base_url('/admin/edit_data_kriteria') ?>/<?php echo $row->id_kriteria ?>">
															<i class="fas fa-user-edit"></i></i>
														</a>
														<a class='btn btn-danger btn-circle' data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Data" href="<?php echo base_url('/admin/delete_data_kriteria') ?>/<?php echo $row->id_kriteria ?>">
															<i class="fas fa-user-slash"></i>
														</a>
													</td>
												</tr>
											<?php } ?>


										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>



<!-- 
			<script type="text/javascript">
				$(function() {
					$("#datatable").dataTable();
				});
			</script> -->
		</div>

	</div>
	</div>

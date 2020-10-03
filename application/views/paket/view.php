<div class="row">
	<div class="col-lg-7">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-gray-900">
					<i class="fas fa-box-open"></i>
					Master Paket
				</h6>
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Kode</th>
							<th scope="col">Nama Paket</th>
							<th scope="col">Tipe Akses</th>
							<th scope="col">Harga</th>
							<th scope="col">Operasi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if ($paket == NULL) : ?>
							<tr>
								<td colspan="6" class="text-center">tidak ada data paket</td>
							</tr>
						<?php endif ?>
						<?php
						$no = 1;
						foreach ($paket as $dt) : ?>
							<tr>
								<th scope="row"><?= $no++ ?></th>
								<td><?= strtoupper($dt->IdPaket) ?></td>
								<td><?= strtoupper($dt->NamaPaket) ?></td>
								<td><?= strtoupper($dt->TipeAkses) ?></td>
								<td><?= rupiah(strtoupper($dt->HargaPaket)) ?></td>
								<td>
									<a href="" class="btn btn-circle btn-sm btn-info" data-toggle="modal" data-placement="bottom" title="Edit paket" data-target="#editModal<?= encrypt_url($dt->IdPaket) ?>">
										<i class="fas fa-edit"></i>
									</a>
									<button onclick="deleteConfirm('<?= base_url('paket/delete/') . encrypt_url($dt->IdPaket) ?>')" href="#!" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus paket">
										<i class="fas fa-trash"></i>
									</button>
								</td>
							</tr>
							<!--Edit Modal-->
							<div class="modal fade" id="editModal<?= encrypt_url($dt->IdPaket) ?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
								<div class="modal-dialog modal-md shown" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="editModal<?= encrypt_url($dt->IdPaket) ?>">Edit Paket <?= $dt->IdPaket ?></h5>
										</div>
										<div class="modal-body">
											<form action="<?= base_url('paket/update/') . encrypt_url($dt->IdPaket) ?>" method="post">
												<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
												<div class="form-group">
													<label for="fkodepaketedit">Kode Paket</label>
													<input type="text" class="form-control <?= form_error('fkodepaketedit') ? 'is-invalid' : '' ?>" id="fkodepaketedit" name="fkodepaketedit" value="<?= $this->input->post('fkodepaketedit') ? $this->input->post('fkodepaketedit') : $dt->IdPaket ?>" readonly>
													<div class="invalid-feedback">
														<?= form_error('fkodepaketedit'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="fnamapaketedit">Nama Paket</label>
													<input type="text" class="form-control <?= form_error('fnamapaketedit') ? 'is-invalid' : '' ?>" id="fnamapaketedit" name="fnamapaketedit" value="<?= $this->input->post('fnamapaketedit') ? $this->input->post('fnamapaketedit') : $dt->NamaPaket ?>" autofocus autocomplete="off">
													<div class="invalid-feedback">
														<?= form_error('fnamapaketedit'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="ftipeaksesedit">Tipe Akses</label>
													<input type="text" class="form-control <?= form_error('ftipeaksesedit') ? 'is-invalid' : '' ?>" id="ftipeaksesedit" name="ftipeaksesedit" value="<?= $this->input->post('ftipeaksesedit') ? $this->input->post('ftipeaksesedit') : $dt->TipeAkses ?>" autocomplete="off">
													<div class="invalid-feedback">
														<?= form_error('ftipeaksesedit'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="fhargapaketedit">Harga</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">Rp</div>
														</div>
														<input type="text" class="form-control <?= form_error('fhargapaketedit') ? 'is-invalid' : '' ?> harga" id="fhargapaketedit" name="fhargapaketedit" value="<?= $this->input->post('fhargapaketedit') ? $this->input->post('fhargapaketedit') : $dt->HargaPaket ?>" autocomplete="off">
														<div class="invalid-feedback">
															<?= form_error('fhargapaketedit'); ?>
														</div>
													</div>
												</div>
										</div>
										<div class="card-footer text-muted text-right">
											<a href="<?= base_url('paket') ?>"><button class="btn btn-secondary btn-sm" type="button"> Cancel</button></a>
											<button class="btn btn-primary btn-sm" type="submit">Update</button>
										</div>
										</form>
									</div>
								</div>
							</div>
			</div>
		<?php endforeach ?>
		</tbody>
		</table>
		</div>
	</div>
</div>
<div class="col-lg-5">
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-gray-900">
				<i class="fas fa-plus"></i>
				Tambah Paket
			</h6>
		</div>
		<div class="card-body">
			<form action="<?= base_url('paket/create') ?>" method="post">
				<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
				<div class="form-group">
					<label for="fkodepaket">Kode Paket</label>
					<input type="text" class="form-control <?= form_error('fkodepaket') ? 'is-invalid' : '' ?>" id="fkodepaket" name="fkodepaket" value="<?= set_value('fkodepaket') ?>" autocomplete="off" autofocus>
					<div class="invalid-feedback">
						<?= form_error('fkodepaket'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="fnamapaket">Nama Paket</label>
					<input type="text" class="form-control <?= form_error('fnamapaket') ? 'is-invalid' : '' ?>" id="fnamapaket" name="fnamapaket" value="<?= set_value('fnamapaket') ?>" autocomplete="off">
					<div class="invalid-feedback">
						<?= form_error('fnamapaket'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="ftipeakses">Tipe Akses</label>
					<input type="text" class="form-control <?= form_error('ftipeakses') ? 'is-invalid' : '' ?>" id="ftipeakses" name="ftipeakses" value="<?= set_value('ftipeakses') ?>" autocomplete="off">
					<div class="invalid-feedback">
						<?= form_error('ftipeakses'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="fhargapaket">Harga</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text">Rp</div>
						</div>
						<input type="text" class="form-control <?= form_error('fhargapaket') ? 'is-invalid' : '' ?>" id="fhargapaket" name="fhargapaket" value="<?= set_value('fhargapaket') ?>" autocomplete="off">
						<div class="invalid-feedback">
							<?= form_error('fhargapaket'); ?>
						</div>
					</div>
				</div>
		</div>
		<div class="card-footer text-muted text-right">
			<button class="btn btn-success btn-sm" type="submit">Tambah</button>
		</div>
		</form>
	</div>
</div>
</div>

<?php
if ($this->uri->segment(2) == 'update') { ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#editModal<?= $id ?>').modal('show');
		});
	</script>
<?php } ?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#fhargapaket").mask('000.000.000', {
			reverse: true
		});
		$(".harga").mask('000.000.000', {
			reverse: true
		});

	})
</script>
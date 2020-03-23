<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		<h6 class="m-0 font-weight-bold text-gray-900"><i class="fad fa-users"></i> Customers</h6>
	</div>
	<div class="card-body">
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>" id="nav-master-tab" data-toggle="tab" href="#nav-master" role="tab" aria-controls="nav-master" aria-selected="true">Master Customer</a>
				<a class="nav-item nav-link <?php echo $this->uri->segment(2) == 'create' ? 'active': '' ?>" id="nav-formulir-tab" data-toggle="tab" href="#nav-formulir" role="tab" aria-controls="nav-formulir" aria-selected="false">Formulir Customer</a>
			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>" id="nav-master" role="tabpanel" aria-labelledby="nav-master-tab">
				<div class="table-responsive mt-3 mb-3">
					<table class="table table-borderless table-hover" id="masteruser" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No Customer</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Handphone</th>
								<th>Tgl Pasang</th>
								<th>Status</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($customer as $dt) :?>
								<tr>
									<td><?php echo strtoupper($dt->NoPelanggan)?></td>
									<td><?php echo strtoupper($dt->NamaPelanggan)?></td>
									<td><?php echo strtoupper($dt->EmailPelanggan)?></td>
									<td><?php echo strtoupper($dt->TelponPelanggan)?></td>
									<td><?php echo strtoupper($dt->TglPasang)?></td>
									<td><?php echo $dt->Status == '1' ? '<span class="badge badge-success">aktif</span>': '<span class="badge badge-danger">nonaktif</span>' ?></td>
									<td>
										<a href="<?=base_url('customer/detail/').encrypt_url($dt->IdPelanggan)?>"><button class="btn btn-circle btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail customer">
											<i class="fad fa-user-cog"></i>
										</button></a>
										<a href="<?=base_url('customer/update/').encrypt_url($dt->IdPelanggan)?>" class="btn btn-circle btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Update customer">
											<i class="fas fa-user-edit"></i>
										</a>
										<button onclick="deleteConfirm('<?=base_url('customer/delete/').encrypt_url($dt->IdPelanggan)?>')" href="#!" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus customer">
											<i class="fas fa-user-minus"></i>
										</button>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>

				</div>
				<div class="card-footer text-right text-gray-500">
					<span>
						<small>
							Master customer GisakaNet pada tanggal <?=date('d/m/Y') ?>
						</small>
					</span>
				</div>
			</div>
			<div class="tab-pane fade show <?php echo $this->uri->segment(2) == 'create' ? 'active': '' ?>" id="nav-formulir" role="tabpanel" aria-labelledby="nav-formulir-tab">
				<form action="<?=base_url('customer/create') ?>" method="post" class="mt-3">
					<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash(); ?>">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="fnourut">Nomor Urut</label>
							<input type="text" class="form-control" id="fnourut"  name="fnourut" value="<?=sprintf("%03s", $nopel)?>" readonly>
						</div>
						<div class="form-group col-md-8">
							<label for="fnamapelanggan">Nama Pelanggan</label>
							<input type="text" class="form-control <?=form_error('fnamapelanggan')?'is-invalid':''?>" id="fnamapelanggan" name="fnamapelanggan" value="<?=set_value('fnamapelanggan')?>" autofocus autocomplete="off">
							<div class="invalid-feedback">
								<?php echo form_error('fnamapelanggan'); ?>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="femail">Email Pelanggan</label>
							<input type="email" class="form-control <?=form_error('femail')?'is-invalid':''?>" id="femail" name="femail" value="<?=set_value('femail')?>" autocomplete="off">
							<div class="invalid-feedback">
								<?php echo form_error('femail'); ?>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fnohp">Handphone</label>
							<input type="text" class="form-control <?=form_error('fnohp')?'is-invalid':''?>" id="fhp" name="fnohp" value="<?=set_value('fnohp')?>" autocomplete="off">
							<div class="invalid-feedback">
								<?php echo form_error('fnohp'); ?>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="ftglpasang">Tanggal Pasang</label>
							<input type="date" class="form-control <?=form_error('ftglpasang')?'is-invalid':''?>" id="ftglpasang" name="ftglpasang" value="<?=set_value('ftglpasang')?>">
							<div class="invalid-feedback">
								<?php echo form_error('ftglpasang'); ?>
							</div>
						</div>

					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
							<label for="falamat">Alamat Lengkap</label>
							<textarea class="form-control <?=form_error('falamat')?'is-invalid':''?>" id="falamat" name="falamat"><?=set_value('falamat')?></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('falamat'); ?>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label for="fpaket">Paket Internet</label>
							<select id="fpaket" class="form-control <?php echo form_error('fpaket')?'is-invalid':''?>" name="fpaket">
								<option selected hidden value="">Pilih Paket...</option>
								<?php foreach ($paket as $dt) :?>
									<option value="<?=$dt->IdPaket?>" <?=set_value('fpaket') == "$dt->IdPaket" ? "selected" : ''?>><?=ucfirst($dt->NamaPaket);?></option>
								<?php endforeach ?>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('fpaket'); ?>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label>Status Pelanggan</label>
							<div class="custom-control custom-radio">
								<input type="radio" id="fstatus1" name="fstatus" class="custom-control-input <?php echo form_error('fstatus')?'is-invalid':''?>" value="1" <?=set_value('fstatus') == "1" ? "checked" : ''?>>
								<label class="custom-control-label" for="fstatus1"><span class="badge badge-success">Aktif</span></label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="fstatus2" name="fstatus" class="custom-control-input <?php echo form_error('fstatus')?'is-invalid':''?>" value="0" <?=set_value('fstatus') == "0" ? "checked" : ''?>>
								<label class="custom-control-label" for="fstatus2"><span class="badge badge-danger">Nonaktif</span></label>
								<div class="invalid-feedback">
									<?php echo form_error('fstatus'); ?>
								</div>
							</div>

						</div>
					</div>
					<div class="card-footer text-right">
						<button type="submit" class="btn btn-primary">
							<i class="fad fa-paper-plane"></i>
							Kirim
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

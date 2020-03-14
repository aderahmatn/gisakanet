<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">       
		<h6 class="m-0 font-weight-bold text-gray-900"><i class="fad fa-users"></i> Customers</h6>
	</div>
	<div class="card-body">
		<nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-master-tab" data-toggle="tab" href="#nav-master" role="tab" aria-controls="nav-master" aria-selected="true">Master Customer</a>
				<a class="nav-item nav-link" id="nav-formulir-tab" data-toggle="tab" href="#nav-formulir" role="tab" aria-controls="nav-formulir" aria-selected="false">Register Customer</a>
			</div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="nav-master" role="tabpanel" aria-labelledby="nav-master-tab">
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
						<tr>
							<td>12032020004</td>
							<td>ADE RAHMAT NURDIYANA</td>
							<td>ade.nurdiyana@gmail.com</td>
							<td>087776451664</td>
							<td>12/03/2020</td>
							<td><span class="badge badge-success">aktif</span></td>
							<td>
								<button href="<?php echo site_url('user/edit/') ?>" class="btn btn-circle btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail customer">
									<i class="fad fa-user-cog"></i>
								</button>
								<button href="<?php echo site_url('user/edit/') ?>" class="btn btn-circle btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit customer">
									<i class="fas fa-user-edit"></i>
								</button>
								<button onclick="deleteConfirm('<?=site_url('barang/delete/')?>')" href="#!" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus customer">
									<i class="fas fa-user-minus"></i>
								</button>
							</td>
						</tr>
						<tr>
							<td>12032020005</td>
							<td>GINA NURHAMIDAH</td>
							<td>gingin.hamham@gmail.com</td>
							<td>081326433664</td>
							<td>29/03/2020</td>
							<td><span class="badge badge-danger">nonaktif</span></td>
							<td>
								<button href="<?php echo site_url('user/edit/') ?>" class="btn btn-circle btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Detail customer">
									<i class="fad fa-user-cog"></i>
								</button>
								<button href="<?php echo site_url('user/edit/') ?>" class="btn btn-circle btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Edit customer">
									<i class="fas fa-user-edit"></i>
								</button>
								<button onclick="deleteConfirm('<?=site_url('barang/delete/')?>')" href="#!" class="btn btn-circle btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus customer">
									<i class="fas fa-user-minus"></i>
								</button>
							</td>
						</tr>
							<!-- <tbody>
								<?php $no=1;
								foreach ($barang as $dt) :?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo strtoupper($dt->KodeBarang)  ?></td>
										<td><?php echo strtoupper($dt->NamaBarang) ?></td>
										<td><?php echo strtoupper($dt->Qty) ?></td>
										<td><?php echo strtoupper($dt->Box) ?></td>
										<td><?php echo strtoupper($dt->Label) ?></td>
										<td><a href="<?php echo site_url('barang/update/'.$dt->IdBarang) ?>"
											class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

											<a onclick="deleteConfirm('<?=site_url('barang/delete/'.$dt->IdBarang)?>')" href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody> -->
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
					<div class="tab-pane fade" id="nav-formulir" role="tabpanel" aria-labelledby="nav-formulir-tab">
						<form action="" method="post" class="mt-3">
							<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash(); ?>">
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="fnik">Nomor Induk Karyawan</label>
									<input type="text" class="form-control is-invalid " id="fnik" autofocus="on">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="fnamadepan">Nama Depan</label>
									<input type="text" class="form-control" id="fnamadepan">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="fnamabelakang">Nama Belakang</label>
									<input type="text" class="form-control" id="fnamabelakang">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="fusername">Username</label>
									<input type="text" class="form-control" id="fusername">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="fpassword">Password</label>
									<input type="password" class="form-control" id="fpassword">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="fulangipassword">Ulangi Password</label>
									<input type="password" class="form-control is-invalid" id="fulangipassword">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="fwa">Whatsapp</label>
									<input type="text" class="form-control is-invalid" id="fwa">
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="fshif">Group Shif</label>
									<select id="fshif" class="form-control is-invalid">
										<option selected>Pilih...</option>
										<option>SHOCC01</option>
										<option>SHOCC02</option>
										<option>SHOCC03</option>
										<option>SHOCC04</option>
									</select>
									<div class="invalid-feedback">
										Please choose a username.
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="fava">Avatar</label>
									<input type="file" class="form-control-file" id="fava">
									<span><small>*File size avatar tidak lebih dari 1Mb</small></span>
									<div class="invalid-feedback">
										Please choose a username.
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
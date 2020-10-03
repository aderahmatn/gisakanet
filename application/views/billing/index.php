<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 text-gray-800">Billings</h1>
  <a href="<?= base_url('billing/create') ?>"><button class="btn btn-primary btn-sm ml-4">Create Tagihan</button></a>
</div>

<!-- Content Row -->
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-2 col-xs-2 mb-4">
    <div class="card border-left-primary shadow h-100 ">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pelanggan Aktif <?= date('m') ?></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAktif ?></div>
          </div>
          <div class="col-auto">
            <i class="fad fa-users fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
      <div class="card-footer text-right bg-white">
        <div class="text-xs">
          <a href="<?= base_url('billing/aktif/') . $bulan ?>" class="text-reset text-uppercase">Selengkapnya <i class="fas fa-arrow-alt-square-right"></i></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-2 col-xs-2 mb-4">
    <div class="card border-left-info shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tagihan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAktif ?></div>
          </div>
          <div class="col-auto">
            <i class="fad fa-file-invoice-dollar fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
      <div class="card-footer text-right bg-white">
        <div class="text-xs">
          <a href="" class="text-reset text-uppercase">Selengkapnya <i class="fas fa-arrow-alt-square-right"></i></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Belum Bayar</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fad fa-box-usd fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
      <div class="card-footer text-right bg-white">
        <div class="text-xs">
          <a href="" class="text-reset text-uppercase">Selengkapnya <i class="fas fa-arrow-alt-square-right"></i></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Lunas</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fad fa-clipboard-list-check fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
      <div class="card-footer text-right bg-white">
        <div class="text-xs">
          <a href="" class="text-reset text-uppercase">Selengkapnya <i class="fas fa-arrow-alt-square-right"></i></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pendapatan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
          </div>
          <div class="col-auto">
            <i class="fad fa-sack-dollar fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
      <div class="card-footer text-right bg-white">
        <div class="text-xs">
          <a href="" class="text-reset text-uppercase">Selengkapnya <i class="fas fa-arrow-alt-square-right"></i></i></a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- cari tagihan -->
<div class="card shadow mb-4">
  <div class="card-body pb-1">
    <form action="<?= base_url('billing') ?>" method="post">
      <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
      <div class="row">
        <div class="col-lg-2 pl-5">
          <div class="form-group">
            <input type="text" class="form-control-plaintext form-control-sm" placeholder="Cari tagihan" readonly>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select name="fbulan" id="fbulan" class="form-control form-control-sm text-uppercase">
              <option value="01" <?= '01' == "$bulan" ? "selected" : '' ?>>Januari</option>
              <option value="02" <?= '02' == "$bulan" ? "selected" : '' ?>>februari</option>
              <option value="03" <?= '03' == "$bulan" ? "selected" : '' ?>>maret</option>
              <option value="04" <?= '04' == "$bulan" ? "selected" : '' ?>>april</option>
              <option value="05" <?= '05' == "$bulan" ? "selected" : '' ?>>mei</option>
              <option value="06" <?= '06' == "$bulan" ? "selected" : '' ?>>juni</option>
              <option value="07" <?= '07' == "$bulan" ? "selected" : '' ?>>juli</option>
              <option value="08" <?= '08' == "$bulan" ? "selected" : '' ?>>agustus</option>
              <option value="09" <?= '09' == "$bulan" ? "selected" : '' ?>>september</option>
              <option value="10" <?= '10' == "$bulan" ? "selected" : '' ?>>oktober</option>
              <option value="11" <?= '11' == "$bulan" ? "selected" : '' ?>>november</option>
              <option value="12" <?= '12' == "$bulan" ? "selected" : '' ?>>desember</option>
            </select>
            <div class="invalid-feedback">
              <?= form_error('fkodepaket'); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <select name="ftahun" id="ftahun" class="form-control form-control-sm text-uppercase">
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
            </select>
            <div class="invalid-feedback">
              <?= form_error('fkodepaket'); ?>
            </div>
          </div>
        </div>
        <div class="col-auto ml-5">
          <div class="form-group">
            <button class="btn btn-success btn-sm btn-block" type="submit">Cari Tagihan</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- tagihan -->
<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-gray-900">Tagihan Bulan <?= $bulan ?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive mt-3 mb-3">
      <table class="table table-borderless stripe table-hover" id="billings" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">
              No
            </th>
            <th>No Customer</th>
            <th>Nama Lengkap</th>
            <th>Periode</th>
            <th>Total Tagihan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($tagihan as $dt) : ?>
            <tr>
              <td class="text-center"><?= $no++ ?></td>
              <td><?= strtoupper($dt->NoPelanggan) ?></td>
              <td><?= strtoupper($dt->NamaPelanggan) ?></td>
              <td><?= strtoupper($dt->PeriodeTagihan) ?></td>
              <td><?= strtoupper($dt->TotalTagihan) ?></td>
              <td>
                <button class="btn btn-primary btn-sm">detail</button>
                <button class="btn btn-success btn-sm">bayar</button>
                <button onclick="deleteConfirm('<?= base_url('billing/delete/') . $dt->IdTagihan ?>')" href="#!" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="batalkan tagihan">
                  batalkan
                </button>
              </td>

              <td></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
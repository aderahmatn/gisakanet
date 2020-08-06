<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 text-gray-800">Billings</h1>
  <select name="bulan" id="bulan" class="ml-4 form-control-sm w-15 text-uppercase">
    <option value="1">januari</option>
    <option value="2">februari</option>
    <option value="3">maret</option>
    <option value="4">april</option>
    <option value="5">mei</option>
    <option value="6">juni</option>
    <option value="7">juli</option>
    <option value="8">agustus</option>
    <option value="9">september</option>
    <option value="10">oktober</option>
    <option value="11">november</option>
    <option value="12">desember</option>
  </select>
</div>

<!-- Content Row -->
<div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 col-xs-2 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pelanggan Aktif</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAktif ?></div>
          </div>
          <div class="col-auto">
            <i class="fad fa-users fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Belum Bayar</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fad fa-file-invoice-dollar fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lunas</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fad fa-clipboard-list-check fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
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
    </div>
  </div>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-gray-900">Pelanggan Aktif</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive mt-3 mb-3">
      <table class="table table-borderless table-hover" id="masteruser" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No Customer</th>
            <th>Nama Lengkap</th>
            <th>Area</th>
            <th>Tgl Tagihan</th>
            <th>Total Tagihan</th>
            <th>Status Tagihan</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($aktif as $dt) : ?>
            <tr>
              <td><?php echo strtoupper($dt->NoPelanggan) ?></td>
              <td><?php echo strtoupper($dt->NamaPelanggan) ?></td>
              <td><?php echo strtoupper($dt->KodeArea) ?></td>
              <td>
                <?php
                $tglPasang = $dt->TglPasang;
                $tgl = substr($tglPasang, 8);
                if ($tgl >= 16) {
                  echo ' Tanggal 16';
                } else {
                  echo ' Tanggal 1';
                }
                ?>
              </td>
              <td><?= 'Rp. ' . strtoupper($dt->HargaPaket) ?></td>
              <td><?= '0' == '1' ? '<span class="badge badge-success">LUNAS</span>' : '<span class="badge badge-danger">PENDING</span>' ?></td>
              <td></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
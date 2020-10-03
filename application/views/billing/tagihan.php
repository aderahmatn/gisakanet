<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 text-gray-800">Billings</h1>
  <select class="ml-4 form-control-sm w-15 text-uppercase" name="fbulan">
    <?php $bln = $this->input->post('fbulan') ? $bulan : $bulan ?>
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
            <th class="text-center">
              <input type="checkbox" name="check-all" id="check-all">
            </th>
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
              <td class="text-center"><input type="checkbox" class="check-item" name="aktif[]" value="<?= $dt->IdPelanggan ?>"></td>
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
              <td><?= rupiah(strtoupper($dt->HargaPaket)) ?></td>
              <td><?= '0' == '1' ? '<span class="badge badge-success">LUNAS</span>' : '<span class="badge badge-danger">PENDING</span>' ?></td>
              <td><button class="btn btn-sm btn-info">tagihan</button></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function() { // Ketika user men-cek checkbox all
      if ($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });

    $("#btn-delete").click(function() { // Ketika user mengklik tombol delete
      var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

      if (confirm) // Jika user mengklik tombol "Ok"
        $("#form-delete").submit(); // Submit form
    });
  });
</script>
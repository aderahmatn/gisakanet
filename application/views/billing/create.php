<form action="" method="post">
    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">



    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-gray-900">Create Tagihan</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-group">
                        <select name="fbulan" id="" class="form-control form-control-sm text-uppercase">
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
                <div class="col-lg-5">
                    <div class="form-group">
                        <select name="ftahun" id="" class="form-control form-control-sm text-uppercase">
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('ftahun'); ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm btn-block" type="submit">Create Tagihan</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive mt-3 mb-3">
                <table class="table table-borderless stripe table-hover" id="billings" width="100%" cellspacing="0">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aktif as $dt) : ?>
                            <tr>
                                <td class="text-center"><input type="checkbox" class="check-item" name="aktif[]" value="<?= $dt->IdPelanggan ?>"></td>
                                <td><?php echo strtoupper($dt->NoPelanggan) ?></td>
                                <td><?php echo strtoupper($dt->NamaPelanggan) ?></td>
                                <td><?php echo strtoupper($dt->KodeArea) ?></td>
                                <td><?php echo mediumdate_indo($dt->TglPasang) ?></td>
                                <td><?= rupiah(strtoupper($dt->HargaPaket)) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
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
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GisakaNet | <?php echo ucfirst($this->uri->segment(1)) ?></title>
  <link rel="icon" href="<?= base_url() . 'favicon.svg' ?>" />
  <!-- Custom fonts for this template-->
  <link href="<?= base_url() . 'assets/vendor/fontawesome/css/all.min.css' ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url() . 'assets/css/font.css' ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url() . 'assets/css/sb-admin-2.css' ?>" rel="stylesheet">
  <!-- Custom styles datatables-->
  <link href="<?= base_url() . 'assets/vendor/datatables/jquery.dataTables.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url() . 'assets/vendor/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url() . 'assets/vendor/toastr/toastr.min.css' ?>" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() . 'assets/vendor/jquery/jquery.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/jquery/jquery.mask.min.js' ?>"></script>

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex bg-gray-100 text-gray-900 align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon">
          <i class="fab fa-gofore"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GisakaNet</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
          <i class="fad fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Main menu
      </div>
      <li class="nav-item <?= $this->uri->segment(1) == 'customer' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('customer') ?>">
          <i class="fad fa-users"></i>
          <span>Customers</span></a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) == 'billing' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('billing')  ?>">
          <i class="fad fa-cash-register"></i>
          <span>Billing</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fad fa-cubes"></i>
          <span>Inventory</span></a>
      </li>
      <li class="nav-item <?= $this->uri->segment(1) == 'paket' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('paket') ?>">
          <i class="fas fa-box-open"></i>
          <span>Paket</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gray-100 topbar mb-4 static-top shadow-lg">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block text-gray-900"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-900 small"><?= ucwords($this->session->userdata('name')); ?></span>
                <img class="img-profile rounded-circle" src="<?= $this->session->userdata('url') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?= $contents ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-gray-300">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; GisakaNet - <a href="https://github.com/aderahmatn">ADRN</a> <?= date('Y') ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() . 'assets/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() . 'assets/js/sb-admin-2.min.js' ?>"></script>
  <!-- Custom scripts for datatables-->
  <script src="<?= base_url() . 'assets/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/sweetalert2/sweetalert2.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/toastr/toastr.min.js' ?>"></script>
</body>

</html>

<!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 10000
    });
    <?php if ($this->session->flashdata('success')) { ?>
      Toast.fire({
        type: 'success',
        title: '<?= $this->session->flashdata('success'); ?>'
      });
    <?php } else if ($this->session->flashdata('error')) {  ?>
      Toast.fire({
        type: 'error',
        title: '<?= $this->session->flashdata('error'); ?>'
      });
    <?php } else if ($this->session->flashdata('warning')) {  ?>
      Toast.fire({
        type: 'warning',
        title: '<?= $this->session->flashdata('warning'); ?>'
      });
    <?php } else if ($this->session->flashdata('info')) {  ?>
      Toast.fire({
        type: 'info',
        title: '<?= $this->session->flashdata('info'); ?>'
      });
    <?php } ?>
  });

  $(document).ready(function() {
    $('#masteruser').DataTable({
      "bPaginate": false,
      "info": false,
      "scrollY": 300,
      "language": {
        "url": "<?php echo base_url() . 'assets/vendor/datatables/Indonesia.json' ?>",
        "sEmptyTable": "Tidak ada data",
      }
    });
    $('#billings').DataTable({
      "bPaginate": false,
      "scrollY": 300,
      "scrollX": true,
      "info": false,
      "language": {
        "url": "<?php echo base_url() . 'assets/vendor/datatables/Indonesia.json' ?>",
        "sEmptyTable": "Tidak ada data",
      }
    });
  });

  function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>
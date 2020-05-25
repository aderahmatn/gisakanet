<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Billing Gisaka - Login</title>
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

</head>

<body class="bg-gray-300">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center ">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login | Billing Gisaka</h1>
                  </div>
                  <form class="user" action="<?php echo base_url('auth/process'); ?>" method="post">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username" autocomplete="off" autofocus="on" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" autocomplete="on" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary   btn-user btn-block">Login</button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Core plugin JavaScript-->
 
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() . 'assets/js/sb-admin-2.min.js' ?>"></script>
  <!-- Custom scripts for datatables-->
  <script src="<?= base_url() . 'assets/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/sweetalert2/sweetalert2.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/toastr/toastr.min.js' ?>"></script>


  
</body>

</html>
<script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'center',
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
  </script>
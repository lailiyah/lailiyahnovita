<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arsip</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/toastr/toastr.min.css">
  <link rel="icon" href="<?= base_url() ?>assets/dist/img/logo.png">
  <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="/auth/login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username/Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
                            
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- sweetalert2 -->
<script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?= base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<script>
  <?php
  /* simpan */
  if ($this->session->flashdata('flash') == "Tersimpan") {
    echo 'swal.fire("Tersimpan", "Data Berhasil Tersimpan", "success")';
  } elseif ($this->session->flashdata('flashGagal') == "Gagal Tersimpan") {
    echo 'swal.fire("Gagal", "Data Gagal Tersimpan", "error")';
  }
/* Edit */
  if ($this->session->flashdata('flashUpdate') == "Terupdate") {
    echo 'swal.fire("Tersimpan", "Data Berhasil Terupdate", "success")';
  } elseif ($this->session->flashdata('fUpdateGagal') == "Gagal Terupdate") {
    echo 'swal.fire("Gagal", "Data Gagal Tersimpan", "error")';
  }
  /* Hapus */
  if ($this->session->flashdata('flashHapus') == "Terhapus") {
    echo 'swal.fire("Terhapus", "Data Berhasil Terhapus", "success")';
  } elseif ($this->session->flashdata('fGagalTerhapus') == "Gagal Terhapus") {
    echo 'swal.fire("Gagal", "Data Gagal Terhapus", "error")';
  }
  ?>
  
</script>

</body>

</html>

</html>
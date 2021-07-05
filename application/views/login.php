<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - App Pajak</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url();?>assets/img/pajak-icon.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 150px"><br>
    <a href="<?php echo base_url();?>"><b>Kertas</b>-Pajak</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <form action="<?php echo base_url();?>login/do_login" method="post">
            <?php if ($this->session->flashdata('konfirm')): ?>
            <div class="alert alert-info alert-dismissible" id="success-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Konfirmasi !</h4>
                <?php echo $this->session->flashdata('konfirm'); ?>
            </div>
            <?php endif; ?>
            <div class="form-group">
                <label class="small mb-1" for="inp_username">Email</label>
                <input class="form-control py-4" id="inp_username" name="inp_username" type="text" placeholder="Nama Pengguna" />
            </div>
            <div class="form-group">
                <label class="small mb-1" for="inp_passwd">Password</label>
                <input class="form-control py-4" id="inp_passwd" name="inp_passwd" type="password" placeholder="Masukkan password" />
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function() 
    {
        window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    });
</script>
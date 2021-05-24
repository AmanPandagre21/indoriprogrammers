  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="<?php echo base_url('public/images/logo5.png'); ?>">

  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style=" background: linear-gradient(to left, #0c274e, #0068ac) !important;">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color: white;"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
 <?php 
    if($this->session->flashdata('success')){
      echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
    }

    if($this->session->flashdata('fail')){
    echo "<div class='alert alert-danger'>".$this->session->flashdata('fail')."</div>";
  }
 ?>
  <div class="card ">
    <div class="card-body login-card-body bg-dark">
      <p class="login-box-msg">Change your password</p>

      <form action="<?php echo base_url().'admin/Admin/changePassword'; ?>" method="post">
        <div class="input-group mb-3 ">
          <input type="password" name="password" class="form-control bg-dark <?php echo (form_error('password') != '') ? 'is-invalid': ''; ?>" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
           <?php echo form_error('password'); ?>
        </div>


         <div class="input-group mb-3">
          <input type="password" name="cpassword" class="form-control bg-dark <?php echo (form_error('cpassword') != '') ? 'is-invalid': ''; ?>" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <!-- /.col -->
          <div class="col-md-6">
            <a href="<?php echo base_url().'admin/Admin/index'; ?>" class="btn btn-secondary btn-block">Go Back</a>
          </div>

          <div class="col-md-6">
            <button type="submit" class="btn btn-danger btn-block">Change Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>

</body>
</html>

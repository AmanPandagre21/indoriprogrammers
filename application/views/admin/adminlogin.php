<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">


<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>Login</a>
  </div>
    
  <?php 
  
    if (!empty($this->session->flashdata('admssg'))) {
      echo "<div class='alert alert-danger'>".$this->session->flashdata('admssg')."</div>";
    }
    if (!empty($this->session->flashdata('admsg'))) {
     echo "<div class='alert alert-danger'>".$this->session->flashdata('admsg')."</div>";
    }

?>


  <!-- /.login-logo -->
  <div class="card login-card">

    <div class="card-body">
       <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url().'admin/admin/adminLogin'; ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control <?php echo (form_error('username') != '') ? 'is-invalid': ''; ?>" value="<?php echo set_value('username'); ?>" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control <?php echo (form_error('password') != '') ? 'is-invalid' : ''; ?>"  placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-3 mt-4">
        <a href="<?php echo base_url().'admin/Admin/changePassword'; ?>">forgot password</a>
      </p>
      
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

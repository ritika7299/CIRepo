<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  
 <?php 
 if($this->session->flashdata('success')) { ?>
      <!-- <div class="success-div float-right">
          <p class="alert alert-success" role="alert">
                <i class="fa fa-check" aria-hidden="true"></i> Login successfully!!</p>
      </div> -->
<?php }
        ?>
<?php
    if($this->session->flashdata('error')) { ?>
        <div class="danger-div">
            <p class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Invalid Email or Password!!</p>
        </div>
<?php }
         ?>
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log-in to start your session</p>
      <p class="login-box-msg"></p>
      
      
      <?php echo validation_errors(); ?>
      <?php echo form_error('email','password');?>
      <?php echo form_open('Admin/adminlogin_form'); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
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
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Forgot password</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo site_url();?>Admin/Register" class="text-center">Don't have an account? <b>Register </b></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php echo form_close(); ?>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>
</body>
<script>
   $(".danger-div").delay(2000).slideUp(200, function() {
    $(this).alert('close');
});
</script>


</html>

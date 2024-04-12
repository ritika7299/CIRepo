<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign-in</title>

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
                <i class="fa fa-check" aria-hidden="true"></i> Sign-in successfully!!</p>
      </div> -->
<?php }
        ?>
<?php
    if($this->session->flashdata('error')) { ?>
        <div id="mywish" class="danger-div">
            <p class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Invalid Email or Password!!</p>
        </div>
<?php }
         ?>
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Sign-in</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session!!</p>
      <p class="login-box-msg"></p>
      <form method="POST" action="<?php echo base_url();?>Auth/signin_form">
      
      <?php echo validation_errors(); ?>
      <?php echo form_open('Auth/signin_form'); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email');?>" placeholder="Email" required="">
          <?php echo form_error('email'); ?>          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p class="error" style="color:red;">Email is required.</p>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password');?>" placeholder="Password"required="">
          <?php echo form_error('password'); ?>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p class="error" style="color:red;">Password is required.</p>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <!-- <label for="remember">
                Remember Me
              </label> -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
        <i class="fas fa-mobile-alt"></i> Sign in using Mobile
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Forgot password</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo site_url();?>Auth/signup" class="text-center">Don't have an account? <b>Sign-up </b></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php echo form_close(); ?>
<!-- /.login-box -->
</form>
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

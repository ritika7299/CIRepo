<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Register</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">

  <!-- Extra bootstrap5 code -->
  
</head>
<body class="hold-transition register-page">
<?php
                                     if($this->session->flashdata('success')) { ?>
                                         <div class="success-div">
                                          <p class="alert alert-success" role="alert">
                                          <i class="fa fa-check" aria-hidden="true"></i> Sign-up successfully, go to the sign-in page!!</p>
                                        </div>
                                     <?php }
                                ?>

                                <?php
                                    if($this->session->flashdata('error')) { ?>
                                        <div class="danger-div">
                                        <p class="alert alert-danger" role="alert">
                                        <i class="fa fa-times" aria-hidden="true"></i> Something went wrong, Try again!!</p>
                                        </div>
                                    <?php }
                                ?>
<div class="register-box">
  <div class="register-logo">
    
    <a href=""><b>Admin</b>Register</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <!-- <p class="login-box-msg">Signup here as a new member!!</p> -->
      <p class="login-box-msg"></p>
      
      <!-- <?php echo validation_errors(); ?> -->
      <form action="" method="">
       <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" size="50" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" size="50" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" size="50" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="cpass" name="cpass" value="<?php echo set_value('cpass'); ?>" size="50" placeholder="Confirm password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign-up
              </button>
          </div>
          <!-- /.col -->
        </div>
      
        </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="<?php echo site_url();?>Auth/mobile" class="btn btn-block btn-primary">
          <!-- <i class="fab fa-facebook mr-2"></i> -->
          <i class="fas fa-mobile-alt"></i>
          Sign up using Mobile
        </a>
        <!-- <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a> -->
      </div>

      <a href="<?php echo site_url();?>Admin/login" class="text-center">Already have account? <b>Login</b></a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>

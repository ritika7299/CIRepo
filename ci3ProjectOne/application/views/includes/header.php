<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/adminlte.min.css">
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <title>CRUD Opertations in CI3!!</title>
  </head>
  <body>
    
    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?php echo base_url();?>Auth/index" class="nav-link px-2 text-white">
            <i class="fa fa-home" aria-hidden="true"></i> Home
          </a></li>
          <li><a href="<?php echo base_url();?>" class="nav-link px-2 text-white">
          <i class="fa-solid fa-user-plus"></i>
          </a></li>
          <li><a href="#" class="nav-link px-2 text-white">
            <i class="fa-solid fa-trash"></i>
          </a></li>
          <li><a href="#" class="nav-link px-2 text-white">
            <i class="fa fa-question-circle" aria-hidden="true"></i> FAQs
          </a></li>
          <li><a href="<?php echo base_url();?>Auth/about" class="nav-link px-2 text-white">
            <i class="fa-solid fa-info"></i> About
          </a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="submit" class="btn btn-outline-light me-2">Search</button>
          <a href=""><button type="submit" class="btn btn-outline-light me-2">Sign-in</button></a>
          <a href="<?php echo base_url();?>Auth/signup"><button type="submit" class="btn btn-warning">Sign-up</button></a>           
        </div>
      </div>
    </div>
  </header>
<!DOCTYPE html>
<html>
    <head>
        <title>Academy Management System|Home</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url() ?>css/style.css">

    </head>
<body>
<header>
  <nav>
    <div class="container-fluid bg-dark ">
      <div class="row">
        <div class="col-7 text-white">
        <i class="fas fa-phone-alt"></i> <a class=" text-decoration-none text-white">1234-5678</a >
        <i class="fas fa-envelope"></i> <a class="text-decoration-none text-white">mail@gmail.com</a>
        </div>
        <div class="col-5 text-end text-white">
        <!--  <i class="fab fa-facebook text-white"></i>
          <i class="fab fa-instagram text-white"></i>
          <i class="fab fa-youtube text-white"></i>
          <i class="fab fa-google text-white"></i>-->
          <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/log" class="text-decoration-none text-white p-2 ">Login</a>
          <i class="fas fa-user-plus"></i><a href="<?php echo base_url()?>amsctrl/stu_reg"class="text-decoration-none text-white p-2">Register</a>
        </div>
      </div>

    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-light">
    <img src="../img/logo.jpg" height="40" width="130">
  <div class="container">
    
  <a href="/" class="navbar-brand text-dark"><b>ACADEMY MANAGEMENT SYSTEM</b></a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto topnow">
      <li class=" navbar-item"><a  href="/" class="nav-link text-dark">Home</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link text-dark">About</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link text-dark">Pages</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link text-dark">Features</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link text-dark">Portifolio</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link  text-dark">Blog</a></li>
    </ul>

  </div>
  </div>
</nav>
</header>
<section class="banner2">

  <div class="container-fluid">
    <div class="container">
      <div class="row vh-100 align-items-center">
        <div class="col text-danger text-center">
      <h1 class="text-white"><b>"Education is one of the most powerful things in life. It allows us to find the meaning behind everything and helps improve lives in a massive way."</b></h1>

      <a href="<?php echo base_url()?>amsctrl/log" class="text-decoration-none text-white px-5 btn btn-success">Login</a>
        </div>
      </div>
    </div>
  </div>

</section>
</body>
</html>
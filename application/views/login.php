<!DOCTYPE html>
<html>
    <head>
        <title>Academy Management System|Login</title>
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
  <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
    
  <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto topnow">
      <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/index" class="nav-link">Home</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link">About</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link">Pages</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link">Features</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link">Portifolio</a></li>
      <li class=" navbar-item"><a  href="/" class="nav-link">Blog</a></li>
    </ul>

  </div>
  </div>
</nav>
</header>
<section class="banner1">
  
    <div class="container">
      <div class="row w-100 d-flex justify-content-center align-items-center vh-100">
        <div class="col-6">
         <div class="card py-3 px-2">
         <p class="text-center my-3 text-capitalize"><span class="main-heading"><i class="fas fa-user fa-5x"></i> </span></p>
          <p class="text-center my-3 text-capitalize"><span class="main-heading">Sign in </span></p>
          <div class="row mx-auto">
            <div class="col-4">
            <a href="/" class="text-decoration-none text-primary"><i class="fab fa-facebook fa-2x"></i></a>
            </div>
            <div class="col-4">
            <a href="/" class="text-decoration-none text-primary"><i class="fab fa-google fa-2x"></i></a>           
            </div>
            <div class="col-4">
            <a href="/" class="text-decoration-none text-danger"> <i class="fab fa-linkedin-in fa-2x"></i></a>
            </div>
          </div>
       <form class="myform" action="<?php echo base_url()?>amsctrl/loginAction"  method="post">
        <div class="mb-3">
          <label></label>
          <input type="text" name="user_name" class="form-control" placeholder="User name/Email-id">  
        </div>
        <div class="mb-3">      
          <input type="password" name="password" class="form-control" placeholder="Password">        
        </div>
        <div class=" text-center button">
          <input type="submit" class="button text-white" value="LOGIN">
</div>
       </form>
        </div>



       </div>
     </div>
        

</section>


</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment2</title>
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
    <style>

    </style>
<body class="admin">
<header>
  <nav>
    <div class="container-fluid bg-dark ">
      <div class="row">
        <div class="col-7 text-white">
        <i class="fas fa-phone-alt"></i> <a class=" text-decoration-none text-white">1234-5678</a >
        <i class="fas fa-envelope"></i> <a class="text-decoration-none text-white">mail@gmail.com</a>
        </div>
        <div class="col-5 text-end text-white">
        <i class="fas fa-sign-out-alt"></i><a href="<?php echo base_url()?>amsctrl/logout" class="text-decoration-none text-white p-2 ">Logout</a>
         
        </div>
      </div>

    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-info">
    <!--<img src="../img/logo.jpg" height="40" width="130">-->
  <div class="container">
    
  <a href="/" class="navbar-brand text-dark"><b>ACADEMY MANAGEMENT SYSTEM</b></a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto topnow">
    <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/admin_index" class="nav-link">Home</a></li>
      
      <li class=" navbar-item menu-item"><a href="<?php echo base_url()?>amsctrl/viewnoti" class="nav-link text-white list-unstyled "><i class="fa fa-user" aria-hidden="true"></i>STAFF</a></li>
      <li class=" navbar-item menu-item"><a href="<?php echo base_url()?>amsctrl/view_noti" class="nav-link text-white list-unstyled"><i class="fa fa-graduation-cap" aria-hidden="true"></i>STUDENT</a></li>
      <li class=" navbar-item menu-item"><a href="<?php echo base_url()?>amsctrl/views" class="nav-link text-white"><i class="fa fa-user" aria-hidden="true"></i>TRAINER</a></li>
       <li class=" navbar-item menu-item"><a href="<?php echo base_url()?>amsctrl/view_notification" class="nav-link text-white"><i class="fa fa-comment" aria-hidden="true"></i>COMPLAINT</a></li>
       <li class=" navbar-item menu-item"><a href="<?php echo base_url()?>amsctrl/view_bill" class="nav-link text-white"><i class="fa fa-bell" aria-hidden="true"></i>SALARY</a></li>
    
  </ul>
</div>
      
      
      
   

       
      
      
      </div>
      </div>
      
      
     

      <!-- Example single danger button -->
      
</div>
  </div>
  </div>
</nav>
</header>
<section class="">
  <div class="container-fluid  ">
    <div class="container">
      <div class="row vh-100 align-items-center">
        <div class="col text-danger text-center">
          
          
        </div>
      </div>
    </div>
  </div>

</section>

</body>
</html>



  
  


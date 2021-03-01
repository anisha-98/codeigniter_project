<!DOCTYPE html>
<html>
<head>
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
        <div class="col-7 text-white text-start">
        <i class="fas fa-phone-alt"></i> <a class=" text-decoration-none text-white">1234-5678</a >
        <i class="fas fa-envelope"></i> <a class="text-decoration-none text-white">mail@gmail.com</a>
        </div>
        <div class="col-5 text-end text-white">
        <!--  <i class="fab fa-facebook text-white"></i>
          <i class="fab fa-instagram text-white"></i>
          <i class="fab fa-youtube text-white"></i>
          <i class="fab fa-google text-white"></i>-->
          <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/log" class="text-decoration-none text-white p-2 ">Login</a>
          <i class="fas fa-user-plus"></i><a href=""class="text-decoration-none text-white p-2">Register</a>
        </div>
      </div>

    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
    
  <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
  <div class="collapse navbar-collapse">
    <div class="navbar-collapse ">
           <ul class="navbar-nav ms-auto topnow">
      
      
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/trainer_profile" class="nav-link text-decoration-none">Profile update</h4></a></li>
                  
                  <li class=" navbar-item "><a  href="<?php echo base_url()?>amsctrl/bill_add"  class="nav-link text-decoration-none">Salary Bill</h4></a></li>
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/note_add" class="nav-link text-decoration-none">Note Add</h4></a></li>
    </ul>

  </div>
  </div>
</nav>
</header>

<section class="comadd">
  <div class="container-fluid">
    <div class="container">
      <div class=" row vh-100 align-items-center">
        <div class=" col text-white text-center  shade1 p-5">
<div class="shade4">
        	<h1 class="text-white">NOTES ADD</h1>
        	<form action="<?php echo base_url()?>amsctrl/note_add_action" method="post" enctype="multipart/form-data">

				<input type="file"  name="note" id="note" class="text-center p-3">
				<br><br>
				
			   Subject:
<select name="section">
<option value="PHP">PHP</option>
<option value="HTML">HTML/CSS</option>
<option value="Code">Codeignator</option>
<option value="Python">Python</option>
<option value="Java">java</option>
<option value="cp">c/c++</option>

</select><br><br>
			<input style="color:white" type="submit" value="Upload" class="btn btn-info px-4">
		</form>
          
        </div>
      </div>
    </div>
  </div>

</section>
		
	</body>

</html>
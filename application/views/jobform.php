<html>
<head>
<title>form</title>
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
   

<style>



form{
    text-align:center;
}
body{
	background-image:url('../img/blue.jpg');
}
.cen
{


    margin-right: 300px;
    background-color: rgba(0,0,255,0.1);
    border:2px solid blue;

}
</style>
</head>
<body>
	<div class="">
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
          <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/log" class="text-decoration-none text-white p-2 ">Logout</a>
          <i class=""></i><a href=""class="text-decoration-none text-white p-2"></a>
        </div>
      </div>

    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-success">
  <div class="container">
    
  <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto topnow">
      <li class=" navbar-item"><a  href="/" class="nav-link">Home</a></li>
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
<form  method="post" action="<?php echo base_url()?>amsctrl/job1">

<h1 class="text-white"><b>JOB VACANCY  ADDING FORM</b></h1>
<section class="text-white shade">
<div class="container">
	<div class="row ml-5">
		<div class="col col-2">
				<div class="">
 
					Company:<input list="company" name="company" ></br><br>
					<datalist id="company">
					<option value="Wipro">
					<option value="IBM">
					<option value="TCS">
					<option value="Infosys">
					<option value="Technopark">
					</datalist>
					Title:<input type="text" name="title"></br><br>
					Department:<input list="department" name="department"></br><br>
					<datalist id="department">
					<option value="Marketing">
					<option value="Finance">
					<option value="Developer">
					</datalist>
					Phoneno:<input type="text" name="phoneno"></br><br>
					Mobile:<input type="text" name="mobile"></br><br>
					Email:<input type="email" name="email"></br><br>
						<input type="submit" value="save" class="btn btn-success px-5">

				</div>
			</div>
		</div>
	</div>
</section>
</form>
</body>
</html>

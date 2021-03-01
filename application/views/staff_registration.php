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
       <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/log" class="text-decoration-none text-white p-2 ">Login</a>
          <i class="fas fa-user-plus"></i><a href=""class="text-decoration-none text-white p-2">Register</a>
        </div>
      </div>

    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bgc">
  <div class="container">
  <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto topnow">
      <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/index" class="nav-link">Home</a></li>
      <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/stu_reg" class="nav-link">Student</a></li>
      <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/newer" class="nav-link">Staff</a></li>
      <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/trainer" class="nav-link">Trainer</a></li>
       </ul>

  </div>
  </div>
</nav>
</header>

<section class="grad">
  <div class="container-fluid  ">
    <div class="container">
      <div class="row vh-100 ">
        <div class="col-6 text-white">
			<div class="frmhd my-5 p-3">
		<p class="h3">STAFF REGISTRATION </p>
</div>
		</div>
<div class="col-6">
	<div class="card m-1">
	<form method="post" action="<?php echo base_url()?>amsctrl/register" enctype="multipart/form-data">
	<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">Name</label>
		</div>
		<div class="col-8 p-1">
			<input type="text" name="Name" class="form-control1">
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">Address</label>
		</div>
		<div class="col-8">
			<textarea name="Address" class="form-control1"></textarea>
		</div>
</div>
	
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">District</label>
		</div>
		<div class="col-8 p-1">
		<select id="district" name="district" class="form-control1">
					<option value="T">Thiruvananthapuram</option>
					<option value="kollam">kollam</option>
					<option value="kottayam">Pathanamthitta</option>
					<option value="p">Kottayam</option>
					<option value="kollam">Eranakulam</option>
					<option value="kottayam">Idukki</option>
					<option value="TVM">Thrissur</option>
					<option value="kollam">Kannur</option>
					<option value="kottayam">Kasarkode</option>
					<option value="TVM">Kozhikode</option>
					<option value="kollam">Palakkad</option>
					<option value="kottayam">Wayanad</option>
					<option value="kollam">Malappuram</option>
					<option value="kottayam"></option></select>
	
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">Pincode:</label>
		</div>
		<div class="col-8 p-1">
			<input type="text" name="Pincode" class="form-control1">
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">Phone number:</label>
		</div>
		<div class="col-8 p-1">
			<input type="text" name="Phoneno" class="form-control1">
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">DOB:</label>
		</div>
		<div class="col-8 p-1">
			<input type="date" name="dob" class="form-control1">
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">Gender:</label>
		</div>
		<div class="col-8 p-1">
			<input type="radio" name="gender" id="male" class="form-control1">
			<label for="male" class="text-danger">male</label>
			<input type="radio" name="gender" id="female"><label for="female" class="text-danger">Female</label>
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">Section</label>
		</div>
		<div class="col-8 p-1">
		<select id="section" name="section" class="form-control1">
        <option value="qh">QH</option>
<option value="finance">Finance</option>
<option value="Operation Head">Operation Head</option>
<option value="Project Head">Project Head</option>
<option value="Manager">Manager</option>
<option value="Assistant">Assistant</option>
</select>
			</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">	Email</label>
		</div>
		<div class="col-8 p-1">
			<input type="email" name="email" class="form-control1">
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">	Photo</label>
		</div>
		<div class="col-8 p-1">
			<input type="file" name="pic" class="form-control1">
		</div>
</div>
<div class="row m-2 text-white text-center">
		<div class="col-4 putclr">
			<label class="label control-label m-2">	Password</label>
		</div>
		<div class="col-8 p-1">
			<input type="text" name="password" class="form-control1">
		</div>
</div>
	<input type="submit" value="Register" class="button text-white"></br></br>
	
	</form>
</div>

        </div>
      </div>
    </div>
  </div>

</section>


	</body>
	</html>
	


<html>
<head>
<title>First site </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/log" class="text-decoration-none text-white p-2 ">Logout</a>
                <i class=""></i><a href=""class="text-decoration-none text-white p-2"></a>
            </div>
      </div>

  </div>

  </nav>

<nav class="navbar navbar-expand-lg  px-5 bg-danger text-end">
      <div class="container">
    
           <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
        <div class="navbar-collapse ">
           <ul class="navbar-nav ms-auto topnow">
      
      
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/trainer_profile" class="nav-link text-decoration-none">Profile update</h4></a></li>
                  
                  <li class=" navbar-item "><a  href="<?php echo base_url()?>amsctrl/bill_add"  class="nav-link text-decoration-none">Salary Bill</h4></a></li>
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/note_add" class="nav-link text-decoration-none">Note Add</h4></a></li>
      <!-- <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Complaint
                <span class="caret"></span></button>
                   <ul class="dropdown-menu bg-info">
                        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/complaint_reg" class="nav-link text-decoration-none">Add complaint</a></li>
                        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/view_replay" class="nav-link text-decoration-none">Complaint replay view</a></li>
                        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/view_notification" class="nav-link text-decoration-none">view complaint</a></li>
                  </ul>
        </div>-->

       
         
    </ul>
</div>

  </div>
  
</nav>
</header>

<section class="trup">
    <h1 class="text-center text-white">TRINERS UPDATION  FORM </h1>
<div class="container shade2">
    <div class="row">
        <div class="col-5">

<form  action="<?php echo base_url()?>amsctrl/updatedet" method="post">
     
<?php


       if(isset($user_data))
       { 
           foreach($user_data->result() as $row1)
           {
            
            
    ?>

    
    Name:<input type="text" name="name" value="<?php echo $row1->name; ?>"></br></br>
    
    
    Address:<input type="text" name="address" value="<?php echo $row1->address; ?>"></br></br>
    District:<select id="district" name="dist" value="<?php echo $row1->district; ?>">
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
                    <option value="kottayam"></option></select><br><br>
    Pincode:    <input type="text" name="pincode" value="<?php echo $row1->pincode; ?>"></br></br>
    Phone number:   <input type="text" name="phoneno" value="<?php echo $row1->phoneno; ?>"></br></br>
    Dob:    <input type="date" name="dob"></br></br>
    Gender: <input type="radio" name="gender" id="male" value="<?php echo $row1->gender; ?>"><label for="male">male</label><input type="radio" name="gender" id="female"><label for="female">Female</label></br></br>
    Subject:  <input list="subject" name="subject" value="<?php echo $row1->subject; ?>"></br></br>
                <datalist id="subject">
                    <option value="B.tech">
                    <option value="M.tech">
                    <option value="Bsc">
                    <option value="MCA">
                </datalist>
                
    Email:<input type="email" name="email" value="<?php echo $row1->user_name; ?>"></br></br>
    Password:<input type="text" name="password"></br></br>
    <input type="submit"  name="update" value="update" class="px-5 text-white bg-dark btn"></br></br>
    
<?php
        }
    }
    ?>
</div>
</div>
</div>
</section>
    </form>
    </body>
    </html>
    

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
                <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/logout" class="text-decoration-none text-white p-2 ">Logout</a>
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
      
      
      <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/student_index" class="nav-link text-decoration-none">Home</h4></a></li>
                  
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/stud_profile" class="nav-link text-decoration-none">Profile update</h4></a></li>
                  
                  <li class=" navbar-item "><a  href="<?php echo base_url()?>amsctrl/jobvacview"  class="nav-link text-decoration-none">Job view</h4></a></li>
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/view_note" class="nav-link text-decoration-none">Note view</h4></a></li>
       <div class="dropdown">
            <button class="btn text-white dropdown-toggle" type="button" data-toggle="dropdown">Complaint
                <span class="caret"></span></button>
                   <ul class="dropdown-menu bg-info">
                        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/complaint_reg" class="nav-link text-decoration-none">Add complaint</a></li>
                        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/view_replay" class="nav-link text-decoration-none">Complaint replay view</a></li>
                        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/view_notification" class="nav-link text-decoration-none">view complaint</a></li>
                  </ul>
        </div>

       
         
    </ul>
</div>

  </div>
  
</nav>
</header>
<div class="container-fluid  ">
    <div class="container">
      <div class="row vh-100 ">
        <div class="col-6 text-white">
      <div class="frmhd my-5 p-3">
                <p class="h3">STUDENT UPDATION </p>
            </div>
    </div>
   
    <div class="col-6">
  <div class="card m-1">
   
<form  action="<?php echo base_url()?>amsctrl/update_det" method="post">
     
<?php

       if(isset($user_data))
       { 
           foreach($user_data->result() as $row1)
           {
             
            
    ?>
    

            <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2">Name</label>
                    </div>
                    <div class="col-8 p-1">
                            <input type="text"  class="form-control1" name="name" value="<?php echo $row1->s_name; ?>">
                     </div>
            </div>
            <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2"> FatherName</label>
                    </div>
                    <div class="col-8 p-1">
                    <input type="text" name="fname" class="form-control1" value="<?php echo $row1->fathername; ?>">
                     </div>
            </div>
            <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2"> Address</label>
                    </div>
                    <div class="col-8 p-1">
                    <input type="text" name="address" class="form-control1" value="<?php echo $row1->address; ?>">
                     </div>
            </div>
            <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2"> District</label>
                    </div>
                    <div class="col-8 p-1">
                    <input type="text" class="form-control1" value="<?php echo $row1->district; ?>">
                     </div>
            </div>
            <div class="row m-2 text-white text-center">
                    <div class="col-4 ">
                            <label class="label control-label m-2"> </label>
                    </div>
                    <div class="col-8 p-1">
                    
                    
    <select id="district" name="dist" class="form-control1" value="<?php echo $row1->district; ?>">
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
                            <label class="label control-label m-2"> Pincode</label>
                    </div>
                    <div class="col-8 p-1">
                        <input type="text" name="pincode" class="form-control1" value="<?php echo $row1->pincode; ?>">
                   </div>
             </div>
             <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2"> Phone number</label>
                    </div>
                    <div class="col-8 p-1">
                        <input type="text" name="phoneno" class="form-control1" value="<?php echo $row1->mobileno; ?>">
                   </div>
             </div>
             <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2"> DOB</label>
                    </div>
                    <div class="col-8 p-1">
                        <input type="text" class="form-control1" value="<?php echo $row1->dob; ?>">
                   </div>
             </div>
             <div class="row m-2 text-white text-center">
                    <div class="col-4 ">
                            <label class="label control-label m-2"> </label>
                    </div>
                    <div class="col-8 p-1">
                    <input type="date" class="form-control1" name="dob"></br></br>
                   </div>
             </div>
             <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2">Gender </label>
                    </div>
                    <div class="col-8 p-1">
                    <input type="radio" name="gender" id="male" value="<?php echo $row1->gender; ?>"><label for="male" class="text-danger">male</label><input type="radio" name="gender" id="female"><label for="female" class="text-danger">Female</label>
                   </div>
             </div>
             <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2">Education </label>
                    </div>
                    <div class="col-8 p-1">
                <input list="education" name="education" class="form-control1" value="">
                <datalist id="education">
                    <option value="B.tech">
                    <option value="M.tech">
                    <option value="Bsc">
                    <option value="MCA">
                </datalist>
                </div>
                </div>
                <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2">Course </label>
                    </div>
                    <div class="col-8 p-1">
                 <input list="course" name="course" class="form-control1" value="<?php echo $row1->course;?>">  
                <datalist id="course">
                    <option value="<?php echo $row1->course;?>">
                    <option value="JSD">
                    <option value="Front-End Developer">
                    <option value="Back-end Developer">
                    <option value="Network">
                </datalist>
                </div>
                </div>
                <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2">Email </label>
                    </div>
                    <div class="col-8 p-1">
          <input type="email" name="email" class="form-control1" value="<?php echo $row1->user_name; ?>"></div></div>
           </div>
                <div class="row m-2 text-white text-center">
                    <div class="col-4 putclr">
                            <label class="label control-label m-2">Password </label>
                    </div>
                    <div class="col-8 p-1">
    Password:<input type="text" name="password" class="form-control1"></div></div>
    <input type="submit" name="update" value="update" class="button"></br></br>
    
<?php
        }
    }
    ?>
    </div>
    </div>
    </form>
    </body>
    </html>
    

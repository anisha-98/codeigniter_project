<html>
<head>
<title>table</title>

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
/*table,td,th{
            border:1px solid;
            border-collapse:collapse;
            padding:20px;
           
           
            
            
}*/
th

{

  opacity:0px;
}
.a
{
   
    width:550px;
    height:650px;
    padding:20px;
    text-align:center;
    position:relative;
    margin-left:10px;
    
    
}
body{

    background-color:rgba(1,0,0,0);
    background-image:url('../img/blue.jpg');
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
          <i class="fas fa-sign-in-alt"></i><a href="<?php echo base_url()?>amsctrl/logout" class="text-decoration-none text-white p-2 ">Logout</a>
                <i class=""></i><a href=""class="text-decoration-none text-white p-2"></a>
            </div>
      </div>

  </div>

  </nav>

<nav class="navbar navbar-expand-lg  px-5 bg-info text-end">
      <div class="container">
    
           <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
        <div class="navbar-collapse ">
           <ul class="navbar-nav ms-auto topnow">
      
        <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/student_index" class="nav-link text-decoration-none">Home</h4></a></li>
      
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/stud_profile" class="nav-link text-decoration-none"><i class="fa fa-user" aria-hidden="true"></i>Profile update</h4></a></li>
                  
                  <li class=" navbar-item "><a  href="<?php echo base_url()?>amsctrl/jobvacview"  class="nav-link text-decoration-none"><i class="fa fa-bell" aria-hidden="true"></i>Job view</h4></a></li>
                  <li class=" navbar-item"><a  href="<?php echo base_url()?>amsctrl/view_note" class="nav-link text-decoration-none"><i class="fa fa-sticky-note" aria-hidden="true"></i>Note view</h4></a></li>
       <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-plus" aria-hidden="true"></i>Complaint
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
<div class="contaniner p-5 ">
<h1 class="rounded  text-white

">JOB APPLY</h1>
<table class="table table-hover">
<tr class=" active">
  <th class="text-white" ><b>Company</b></th>
  <th class="text-white"><b>Title</b></th>
  <th class="text-white"><b>Department</b></th>
  <th class="text-white"><b>Phoneno</b></th>
  <th class="text-white"><b>Mobile</b></th>
  <th class="text-white"><b>Email</b></th>
  <th class="text-white"><b>Action</b></th>
  <!---<td>Password</td>--->
</tr>
<?php
if($n->num_rows()>0)
{
   foreach($n->result() as $row)
{
?>
<tr class="table-primary">
<td><?php echo $row->company;?></td>
<td class="table-info"><?php echo $row->title;?></td>
<td><?php echo $row->department;?></td>
<td class="table-info"><?php echo $row->phoneno;?></td>
<td><?php echo $row->mobile;?></td>
<td class="table-info"><?php echo $row->email;?></td>
<td><a href="<?php echo base_url()?>amsctrl/jobapply/<?php echo $row->id;?>" class="text-dark btn btn-info">Apply</a></td>


</tr>


<?php
}
}
?>
</table>
</body>
</html>
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
<div class="contaniner p-5 ">
<h1 class="rounded ">JOB VACANCY</h1>
<table class="table table-hover">
<tr class=" active">
  <th><b>Company</b></th>
  <th><b>Title</b></th>
  <th><b>Department</b></th>
  <th><b>Phoneno</b></th>
  <th><b>Mobile</b></th>
  <th><b>email</b></th>
 
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



</tr>


<?php
}
}
?>
</table>
</body>
</html>
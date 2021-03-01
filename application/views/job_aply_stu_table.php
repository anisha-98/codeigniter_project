
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
<h1 class="p-3"><center>Job Applied Student List</h1>

<table class="table">
<tr class="bg-danger"> <th>id</th>
<th>Aplay Student Name</th>
<th>District</th>
          <th>Phone No</th>
          <th>DOB</th>
          <th>Gender</th>
          <th>Qualification</th>
          <th>Email</th>
          <th>Job Title</th>



</tr>
<?php
             
              if($b->num_rows()>0)
              {
                  foreach($b->result() as $row)

              {


         ?>
         <tr class="bg-info">
          <td><?php echo $row->id;?></td>
         <td><?php echo $row->Name;?></td>
          <td><?php echo $row->District;?></td>
          <td><?php echo $row->Phoneno;?></td>
         <td><?php echo $row->dob;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->qualification;?></td>
         <td><?php echo $row->email;?></td>
         <td><?php echo $row->department;?></td>
         

          </tr>
          <?php
}
}
?>

</table>

</body>
</html>

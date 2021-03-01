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
<body class="no">
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
         <i class="fas fa-sign-out-alt"></i><a href="<?php echo base_url()?>amsctrl/logout" class="text-decoration-none text-white p-2 ">Logout</a>
        </div>
      </div>

    </div>
  </nav>
  <nav class="navbar navbar-expand-lg bg-danger">
  <div class="container">
    
  <a href="/" class="navbar-brand text-white">ACADEMY MANAGEMENT SYSTEM</a>
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
</nav>
</header>
<a href="<?php echo base_url()?>amsctrl/admin_index" class="btn btn-info text-start"> Previous </a>
<h1 class="p-3"><center>BILL VIEW</h1>

<div class="container">
<table class="table">
<tr class="bg-danger">
<th>id</th>
<th>Teacher Name</th>
<th>Sallary</th>


</tr>
<?php
             
              if($n->num_rows()>0)
              {
                  foreach($n->result() as $row)

              {


         ?>
         <tr class="bg-info">
          <td><?php echo $row->id;?></td>
          <td><?php echo $row->name;?></td>
          <td><a href ="<?php echo base_url('/bill/');
          if($row->bill)
          echo $row->bill;
          else echo "nofile";?>"
          target="_blank" class="btn btn-dark">Download</a></td>
         <!--<td><?php echo $row->note;?></td>-->
        


          </tr>
          <?php
}
}
?>

</table>
<div>
</body>
</html>

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
<!--<a href="<?php echo base_url()?>amsctrl/staff_index" class="btn btn-info text-start"> Previous </a>
<h1><center>Complaint VIEW</h1>-->

<table class="table">
<tr> <th>id</th>
<th>complaint</th>
<th>cm_date</th>


</tr>
<?php
             
              if($b->num_rows()>0)
              {
                  foreach($b->result() as $row)

              {


         ?>
         <tr class="bg-info">
          <td><?php echo $row->id;?></td>
         <td><?php echo $row->complaint;?></td>
         <td><?php echo $row->cm_date;?></td>
         

          </tr>
          <?php
}
}
?>

</table>

</body>
</html>
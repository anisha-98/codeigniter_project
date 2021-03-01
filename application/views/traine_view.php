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

<title></title>
<style>
body{
    background-color:#DCDCDC
;
  opacity:1;
}
</style>
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

<div class=" cu">
<div class="container">

<h1>VIEW TRAINERS</h1>

<thead>
<div class="p-5">
<table class="table">

    <tr>
        <th>tid</th>
        <th>name</th>
        <th>address</th>
        <th>district</th>
        <th>pincode</th>
        <th>phoneno</th>
        <th>gender</th>
        <th>dob</th>
        <th>subject</th>
        <th>img_details</th>
        <th>action</th>
        
        
        
    
    </tr>
<?php
if($n->num_rows()> 0)
{
    foreach($n->result() as $row)

{
?>

    <tr class="table-primary">
        <td><?php echo $row->tid;?></td>
        <td class="table-light"><?php echo $row->name;?></td>
        <td><?php echo $row->address;?></td>
       <td class="table-secondary"> <?php echo $row->district;?></td>
        <td><?php echo $row->pincode;?></td>
        <td class="table-info"><?php echo $row->phoneno;?></td>
        <td><?php echo $row->gender;?></td>
        <td class="table-light"><?php echo $row->dob;?></td>
        <td><?php echo $row->subject;?></td>
        <td><img src="<?php echo  base_url('/uploads/');if($row->img_details)
        echo $row->img_details;
        else echo "no photo";?>" style="width:100px"  "height:100px";
         >
        </td> 
        <?php if($row->status=='1'){
            ?>
            <td>Approved <a href="<?php echo base_url() ?>amsctrl/rejecttt/<?php echo $row->id;?>" class="btn btn-info">/reject</a></td>
            <?php }
            else if($row->status==2)
            {
                ?>
                <td>Rejected<a href="<?php echo base_url() ?>amsctrl/approveee/<?php echo $row->id; ?>" class="btn btn-info">Approve</a></td>
                <?php
            }
            else {
                ?>
                <td><a href="<?php echo base_url()?>amsctrl/approveee/<?php echo $row->id; ?>" class="btn btn-info"> Approve</a><a href="<?php echo base_url() ?>amsctrl/rejecttt/<?php echo $row->id; ?>">/reject</a></td></tr> 
                <?php }
}

} else { ?>
<tr><td>no data </td></tr>
<?php } 
?>
</table>
</body>
</html>
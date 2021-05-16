<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-danger p-0 ">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Online Service provider</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link  " href="dashboard.php">
        
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="work.php">
        
        Work Assigned
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link " href="request.php">
       
        Requests
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link ?>" href="assets.php">
        
        Product
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
        
        Technician
       </a>
      </li>
      <!-- <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requesters') { echo 'active'; } ?>" href="requester.php">
        
        Requester
       </a>
      </li> -->
      <!-- <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'sellreport') { echo 'active'; } ?>" href="soldproductreport.php">
        <i class="fas fa-table"></i>
        Sell Report
       </a>
      </li> -->
      <!-- <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'workreport') { echo 'active'; } ?>" href="workreport.php">
        <i class="fas fa-table"></i>
        Work Report
       </a>
      </li> -->
      <li class="nav-item">
       <a class="nav-link " href="changepass.php">
       
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>
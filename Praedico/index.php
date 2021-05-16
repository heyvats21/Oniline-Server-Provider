<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>OSP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
  

</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Online Service Provider</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <!--<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>-->
        
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href= "Admin/login.php" class="nav-link">Admin Login</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/background.jpg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-white font-weight-bold">Welcome</h1>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
   
      
    </div>
  </header> <!-- End Header Jumbotron -->

  
  



  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->


  <div class="container pt-5" >
  <h2 style="text-align:center">Our Partners</h2>
  <div class="row align-items-center" >
  <div class="col"></div>
  <div class="col"></div>
 <div class="col">
  <a href="https://www.urbancompany.com/">
  <img src="https://i.pinimg.com/originals/35/8d/18/358d18501012526f3eff224f9ad2c07b.jpg" alt="Urban Clap" style="width:58px;height:58px;">
    </a>
    </div>
    <div class="col">
    <a href="https://www.amazon.in/?ie=UTF8&ext_vrnc=hi&tag=googhydrabk-21&ascsubtag=_k_Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB_k_&ext_vrnc=hi&gclid=Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB">
  <img src="https://iconarchive.com/download/i80413/uiconstock/socialmedia/Amazon.ico" alt="Amazon" style="width:58px;height:58px;">
    </a>
    </div>
    <div class="col">
    <a href="https://www.amazon.in/?ie=UTF8&ext_vrnc=hi&tag=googhydrabk-21&ascsubtag=_k_Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB_k_&ext_vrnc=hi&gclid=Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB">
  <img src="https://cdn.dribbble.com/users/1295154/screenshots/7063997/001.png?compress=1&resize=400x300" alt="Digital India" style="width:58px;height:58px;">
    </a>
    </div>
    <div class="col"></div>
    <div class="col"></div>
    </div>
</div>


  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" >
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-5 justify-content-center">
        <!-- Start Footer Row -->
        <div class="col-md-8 text-center">
          <!-- Start Footer 2nd Column -->
          <small  class ="justify-content-center">Designed by Udit and Vatsal 2021.
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi modi sint incidunt laborum dolores fugit rem repellendus maiores ex ipsa!</p>
          <a href="https://www.urbancompany.com/">
  <img src="https://image.flaticon.com/icons/png/512/124/124010.png" alt="Urban Clap" style="width:18px;height:18px;">
    </a>
    
    <a href="https://www.amazon.in/?ie=UTF8&ext_vrnc=hi&tag=googhydrabk-21&ascsubtag=_k_Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB_k_&ext_vrnc=hi&gclid=Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB">
  <img src="https://cdn3.iconfinder.com/data/icons/inficons/512/linkedin.png" alt="Amazon" style="width:18px;height:18px;">
    </a>

    <a href="https://www.amazon.in/?ie=UTF8&ext_vrnc=hi&tag=googhydrabk-21&ascsubtag=_k_Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB_k_&ext_vrnc=hi&gclid=Cj0KCQjw4v2EBhCtARIsACan3nw2aOuyUZAApj3QOvirD2WdjcYdyU8MK3JLpTahdZ2WmnlLbPVW5v8aAkXREALw_wcB">
  <img src="https://play-lh.googleusercontent.com/h9jWMwqb-h9hjP4THqrJ50eIwPekjv7QPmTpA85gFQ10PjV02CoGAcYLLptqd19Sa1iJ" alt="Digital India" style="width:18px;height:18px;">
    </a>
          </small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->




  

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>
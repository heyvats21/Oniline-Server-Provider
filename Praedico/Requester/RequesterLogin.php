<?php
include('../dbConnection.php');   //We always include database  because we need to fetch the data ; just write the full code over here 
session_start();  // session_start()--> we use this tag to login once; new page no login. 
if(!isset($_SESSION['is_login']))     //session_start() --> user login hai ki nhi
{
  if(isset($_REQUEST['rEmail']))    //isset fn() -->it has to be declard and not null
  { 
    $rEmail = trim($_REQUEST['rEmail']);  //trim fn() --> space before the email will not be count
    $rPassword = trim($_REQUEST['rPassword']);

    //we are going to match r_email and r_password (*in future we can make it by name too)
    $sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email='".$rEmail."' AND r_password='".$rPassword."' limit 1"; // limit -->specify the number of records to return
    $result = $conn->query($sql);
    if($result->num_rows == 1) //agr 1 rows hoga tbb match krega
    {
      
      $_SESSION['is_login'] = true;  
      $_SESSION['rEmail'] = $rEmail; // $rEmail comes into $_SESSION['rEmail'] {same as in DSA}

      // Redirecting to RequesterProfile page on Correct Email and Pass
      echo "<script> location.href='RequesterProfile.php'; </script>"; //we had used js over here for redirecting to the next page
      exit;
    } 
    else
     {
      $msg = '<div class="alert  mt-2" role="alert warning"> Enter Valid Email and Password </div>';
    }
  }
} 
else 
{
  echo "<script> location.href='RequesterProfile.php'; </script>";
}
?>


<!--Login form-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <style>
    .custom-margin {
         margin-top: 8vh;
      }
   </style>
  <title>Login</title>
</head>

<body>
  <div class="mb-3 text-center mt-5" style="font-size: 30px;">
    
    <span>Online Maintenance Managment System</span>
  </div>
  <p class="text-center" style="font-size: 20px;">  <span>User Area</span>
  </p>
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">
        <form action="" class=" p-4" method="POST">
          <div class="form-group">
            <label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
              class="" placeholder="Email" name="rEmail">
            <!--Add text-white below if want text color white-->
            
          </div>
          <div class="form-group">
            <label for="pass" class="pl-2 font-weight-bold">Password</label><input type="password"
              class="" placeholder="Password" name="rPassword">
          </div>
          <button type="submit" class="btn btn-outline-danger ">Login</button>
          <div class="text-center"><a href="../index.php">Back to Home </div>   
          <?php if(isset($msg)) {echo $msg; } ?>
          
        </form>
      </div>
    </div>
  </div>

  <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>

</html>
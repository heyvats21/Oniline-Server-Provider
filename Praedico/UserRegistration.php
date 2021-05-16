<?php
  include('dbConnection.php');

  if(isset($_REQUEST['rSignup']))   //isset fn() -->it has to be declard and not null
  {                                 
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == ""))
    {
      $regmsg = 'All Fields are Required';
    } 
    else    //if the user has registered before to check 
     {
      //$sql = "SELECT r_email(table mein r_email ka naam) FROM requesterlogin_tb(table name) WHERE r_email='".$_REQUEST['rEmail']."'";
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'"; 
      $result = $conn->query($sql); //again we had made a $result variable to store the $conn data

      if($result->num_rows == 1)  //for checking email id is present 
      {
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      }
       else {

        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];    //$_REQUEST tag se hum $_POST yaa $_GET mein data ko access kr skte haii. advantage of using $_REQUEST tag
        $rEmail = $_REQUEST['rEmail'];    //rName,rEmail form ke name se match honge (input field ke name attribute se match hona chaiye)
        $rPassword = $_REQUEST['rPassword'];


        //SQL query for inserting the values in the data base

        //$sql = "INSERT INTO requesterlogin_tb(name 1,name 2,name3) VALUES ('$variable1','$variable2', '$variable2')";

        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail', '$rPassword')";
        
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>


<!--Create an acoount form-->
<div class="container pt-5" id="registration">
  <h2 class="text-center">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class=" p-4" method="POST">                       <!--post method-->
        <div class="form-group">
          <label for="name" class="pl-2 font-weight-bold">Name</label><input type="text"
            class="form-control" placeholder="Name" name="rName">             <!--This one rName-->
        </div>
        <div class="form-group">
          <label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="rEmail">
        </div>
        <div class="form-group">
          <label for="pass" class="pl-2 font-weight-bold">New
            Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger " name="rSignup">Sign Up</button>
       
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div>
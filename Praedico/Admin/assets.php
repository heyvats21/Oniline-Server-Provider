<?php
define('TITLE', 'Assests');
define('PAGE', 'assets');
include('includes/header.php');
include('../dbConnection.php'); 
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 mt-5 ">
  <!--Table-->
  <h5 class=" bg-white text-black p-2">Product/Parts Details</h5>
  <?php
    $sql = "SELECT * FROM assets_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
  echo '<table class="table">
  <form action="" method="POST">
  <input type = "text" name="text" placeholder="Enter ID to search"><br>
  <input type ="submit" name= "search" value = "Search Data">
  </form>
    <thead>
      <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Name</th>
        
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $result->fetch_assoc()){
      echo '<tr>
        <th scope="row">'.$row["pid"].'</th>
        <td>'.$row["pname"].'</td>
        <td>
          <form action="editproduct.php" method="POST" class="d-inline"> <input type="hidden" name="id" value='. $row["pid"] .'><button type="submit" class="btn btn-info " name="view" value="View">Edit</button></form>  
          <form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["pid"] .'><button type="submit" class="btn btn-secondary " name="delete" value="Delete">Delete</button></form>
          
        </td>
      </tr>';
    }
    echo '</tbody>
    
  </table>';
  } else {
    echo "0 Result";
  }
  if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM assets_tb WHERE pid = {$_REQUEST['id']}";
    if($conn->query($sql) === TRUE){
      // echo "Record Deleted Successfully";
      // below code will refresh the page after deleting the record
      echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
      } else {
        echo "Unable to Delete Data";
      }
    }


  if(isset($_POST['search'])){
    $title = $_POST['text'];

    $query = "SELECT * FROM assets_tb where pname='$title' or pid='$title' ";
    $query_run = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($query_run)){
      ?>
      <table>
      <th>Product Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>Date of Purchase&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>Available&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>Original Cost&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th>Selling Cost</th>
      </table>
      
      
      
      
      <table class="table">
          <form action=""  method="POST">
            <input type="hidden" name = "pid" value="<?php echo $row['pid'] ?>">
            <input type="text" name = "pname" value="<?php echo $row['pname'] ?>">
            <input type="text" name = "pdop" value="<?php echo $row['pdop'] ?>">
            <input type="text" name = "pava" value="<?php echo $row['pava'] ?>">
            <input type="text" name = "ptotal" value="<?php echo $row['ptotal'] ?>">
            <input type="text" name = "poriginalcost" value="<?php echo $row['poriginalcost'] ?>">
            <input type="text" name = "psellingcost" value="<?php echo $row['psellingcost'] ?>">
          </form>
        </table>
      <?php
    }
  }

  ?>
</div>
</div>
<a class="btn btn-danger box" href="addproduct.php">Add product</a>
</div>

<?php
include('includes/footer.php'); 
?>
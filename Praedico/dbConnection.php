<?php

$db_host = "localhost";  //servername
$db_user = "root";        // username
$db_password = "";          //pass
//$db_name = "project_db";
$db_name = "adminlogin_tb";     //TABLE NAME

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}

?>
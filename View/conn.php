<?php
$conn=mysqli_connect("localhost","root","","employee_management_system");
 if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
 }
 ?>
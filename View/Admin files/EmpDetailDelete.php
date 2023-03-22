<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Employee_ID'])){
  $EmployeeID=$_GET['Employee_ID'];
 
 
$sql="DELETE FROM employee where Employee_ID='$EmployeeID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:EmployeeDetails.php?delete_msg=Data has been deleted!');

}
 }
?>
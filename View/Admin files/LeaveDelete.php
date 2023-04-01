<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Leave_ID'])){
  $LeaveID=$_GET['Leave_ID'];
 
 
$sql="DELETE FROM work_leave where Leave_ID='$LeaveID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:LeaveManagement.php?delete_msg=Leave Request has been deleted!');

}
 }
?>
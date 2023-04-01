<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Attendance_ID'])){
  $AttendanceID=$_GET['Attendance_ID'];
 
 
$sql="DELETE FROM attendance where Attendance_ID='$AttendanceID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:AttendanceManagement.php?delete_msg=Attendance has been deleted!');

}
 }
?>
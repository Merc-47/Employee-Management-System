<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Reg_ID'])){
  $RegID=$_GET['Reg_ID'];
 
 
$sql="DELETE FROM registration where Reg_ID='$RegID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:RegisterEmployees.php?delete_msg=Data has been deleted!');

}
 }
?>
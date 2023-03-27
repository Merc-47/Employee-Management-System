<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Dep_ID'])){
  $DepID=$_GET['Dep_ID'];
 
 
$sql="DELETE FROM department where Dep_ID='$DepID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:Departments.php?delete_msg=Data has been deleted!');

}
 }
?>
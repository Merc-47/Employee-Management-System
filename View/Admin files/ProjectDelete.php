<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Project_ID'])){
  $ProjectID=$_GET['Project_ID'];
 
 
$sql="DELETE FROM project_assignment where Project_ID='$ProjectID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:ProjectAssinment.php?delete_msg=Assinment has been deleted!');

}
 }
?>
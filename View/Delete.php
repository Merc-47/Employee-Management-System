<?php include('conn.php');?>
<?php
 if(isset($_GET['Reg_ID'])){
  $RegID=$_GET['Reg_ID'];
 
 
$sql="DELETE FROM registration where Reg_ID='$RegID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:updateEx.php?delete_msg=Data has been deleted!');

}
 }
?>
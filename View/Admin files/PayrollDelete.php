<?php include('dbConnection.php');?>
<?php
 if(isset($_GET['Payroll_ID'])){
  $PayrollID=$_GET['Payroll_ID'];
 
 
$sql="DELETE FROM payroll where Payroll_ID='$PayrollID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
    header('location:Payroll.php?delete_msg=Payroll entry has been deleted!');

}
 }
?>
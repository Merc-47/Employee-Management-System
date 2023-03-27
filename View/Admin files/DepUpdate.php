<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['Dep_ID'])){
  $DepID=$_GET['Dep_ID'];
 
 
$sql="SELECT Dep_ID,DName,Managers,Employees FROM department where Dep_ID='$DepID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}
else{
$row=mysqli_fetch_assoc($result);

}
 }
?>

      <?php
if(isset($_POST['Update_EMP'])){
  if(isset($_GET['Dep_ID'])){
  $UPDepID=$_GET['Dep_ID'];
  }
$DepID=$_POST['Dep_ID'];
$DName=$_POST['DName'];
$Managers=$_POST['Managers'];
$Employees=$_POST['Employees'];
  
$sql="UPDATE department SET Dep_ID='$DepID',DName='$DName',Managers='$Managers',Employees='$Employees'
 WHERE Dep_ID='$UPDepID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:Departments.php?update_msg=Successfully updated!');
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Department</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
<div class="text">
        <h1>Update Department</h1>
      </div>
      <div class="flex">
        <div class="regform">
      <form class="form1" action="DepUpdate.php?Dep_ID=<?php echo $DepID;?>" method="post" >
      <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text" value="<?php echo $row['Dep_ID'];?>">
  
        <label>Department Name</label>
        <input id="DName" name="DName" type="text" value="<?php echo $row['DName'];?>">
  
        <label>Managers</label>
        <input id="Managers" name="Managers" type="text" value="<?php echo $row['Managers'];?>">
  
        <label>Employees</label>
        <input id="Employees" name="Employees" type="text" value="<?php echo $row['Employees'];?>">
  
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Insert</button>
      </div>
      </form>
        </div>
    </div>
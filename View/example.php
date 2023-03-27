<?php include('conn.php');?>
<?php 
 if(isset($_GET['Reg_ID'])){
  $RegID=$_GET['Reg_ID'];
 
 
$sql="SELECT Employee_ID,FName,LName,Email,Dep_ID,Title,UserName,Password FROM registration where Reg_ID='$RegID'";
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
  if(isset($_GET['Reg_ID'])){
  $UPRegID=$_GET['Reg_ID'];
  }
$EmpID=$_POST['Employee_ID'];
$FName=$_POST['FName'];
$LName=$_POST['LName'];
$Email=$_POST['Email'];
$DepID=$_POST['Dep_ID'];
$Title=$_POST['Title'];
$Username=$_POST['UserName'];
$Password=$_POST['Password'];

  
$sql="UPDATE registration SET Employee_ID='$EmpID',FName='$FName',LName='$LName',Email='$Email',Dep_ID='$DepID'
,Title='$Title',UserName='$Username',Password='$Password' WHERE Reg_ID='$UPRegID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:updateEx.php?update_msg=Successfully updated!');
}

}
?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Admin files/Dashboard.css">
</head>
<body>
      <form class="form1" action="example.php?Reg_ID=<?php echo $RegID;?>" method="post" >
      
      <label>Employee ID</label>
        <input id="Employee_ID" name="Employee_ID" type="text" value="<?php echo $row['Employee_ID'];?>">

        <label>First Name</label>
        <input id="FName" name="FName" type="text" value="<?php echo $row['FName'];?>">
  
        <label>Last Name</label>
        <input id="LName" name="LName" type="text" value="<?php echo $row['LName'];?>">
  
        <label>Email</label>
        <input id="Email" name="Email" type="email" value="<?php echo $row['Email'];?>">
  
        <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text" value="<?php echo $row['Dep_ID'];?>">
  
        <label>Job Title</label>
        <input id="Title" name="Title" type="text" value="<?php echo $row['Title'];?>">
  
        <label >User Name</label>
        <input id="UserName" name="UserName"  type="text" value="<?php echo $row['UserName'];?>">
  
        <label>Password</label>
        <input id="Password" name="Password" type="text" value="<?php echo $row['Password'];?>">
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Submit</button>
      </div>
      </form>

</body>
</html>
        
      
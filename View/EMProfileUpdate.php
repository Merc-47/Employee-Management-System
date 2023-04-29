<?php include('conn.php');?>
<?php 
 
 if(isset($_GET['UserName'])){
    $Username=$_GET['UserName'];
$sql="SELECT Email,UserName,Password FROM registration where UserName='$Username'";
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
  if(isset($_GET['UserName'])){
  $UPUserName=$_GET['UserName'];
  }
$Email=$_POST['Email'];
$Username=$_POST['UserName'];
$Password=$_POST['Password'];

  
$sql="UPDATE registration SET Email='$Email',UserName='$Username',Password='$Password' WHERE UserName='$UPUserName'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  
  header('location:Employee Dashboard.php?update_msg=Successfully updated!');
}

}
?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Employee files/EMDashboard.css">
</head>
<body>
<div class="well">
        <div class="text">
        <h1>Employee Profile Update</h1>
      </div>
      </div>
  <center>If User Name is changed Log out and Login to view the changes</cenetr>
      <form class="form1" action="EMProfileUpdate.php?UserName=<?php echo $Username;?>" method="post" >
  
        <label>Email</label>
        <input id="Email" name="Email" type="email" value="<?php echo $row['Email'];?>">
  
        <label >User Name</label>
        <input id="UserName" name="UserName"  type="text" value="<?php echo $row['UserName'];?>">
  
        <label>Password</label>
        <input id="Password" name="Password" type="text" value="<?php echo $row['Password'];?>">
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Save</button>
      </div>
      </form>

</body>
</html>
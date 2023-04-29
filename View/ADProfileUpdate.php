<?php include('conn.php');?>
<?php 
 
 if(isset($_GET['UserName'])){
    $Username=$_GET['UserName'];
$sql="SELECT UserName,Password FROM admin where UserName='$Username'";
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
$Username=$_POST['UserName'];
$Password=$_POST['Password'];

  
$sql="UPDATE admin SET UserName='$Username',Password='$Password' WHERE UserName='$UPUserName'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  
  header('location:AdminDashboard.php?update_msg=Successfully updated!');
}

}
?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Admin files/Dashboard.css">
</head>
<body>
<div class="well">
        <div class="text">
        <h1>Admin Profile Update</h1>
      </div>
      </div>
  <center>If User Name is changed Log out and Login to view the changes</cenetr>
      <form class="form1" action="ADProfileUpdate.php?UserName=<?php echo $Username;?>" method="post" >
  
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
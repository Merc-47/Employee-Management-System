<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['Project_ID'])){
  $ProjectID=$_GET['Project_ID'];
 
 
$sql="SELECT PName,Emp_ID,UserName,Dep_ID,StartDate,EndDate FROM project_assignment where Project_ID='$ProjectID'";
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
  if(isset($_GET['Project_ID'])){
  $UPProjectID=$_GET['Project_ID'];
  }
$PName=$_POST['PName'];
$EmpID=$_POST['Emp_ID'];
$UserName=$_POST['UserName'];
$DepID=$_POST['Dep_ID'];
$StartDate=$_POST['StartDate'];
$EndDate=$_POST['EndDate'];


  
$sql="UPDATE project_assignment SET PName='$PName',Emp_ID='$EmpID',UserName='$UserName',Dep_ID='$DepID'
,StartDate='$StartDate',EndDate='$EndDate' WHERE Project_ID='$UPProjectID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:ProjectAssinment.php?update_msg=Successfully updated!');
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Assinment Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Employee Project Assinment Updation</h1>
      </div>
      </div>
      <a class="btn btn-primary" role="button" href="http://localhost/EMS/View/AdminDashboard.php">Dashboard</a>
      <br><br>
    
            <form class="form1" action="ProjectUpdate.php?Project_ID=<?php echo $ProjectID;?>" method="post">
            
              <label >Project Name</label>
              <input id="ProjectID" name="PName" type="text" value="<?php echo $row['PName'];?>">
            
              <label>Employee ID</label>
              <input id="EmpID" name="Emp_ID" type="text" value="<?php echo $row['Emp_ID'];?>">

              <label >User Name</label>
              <input id="UserName" name="UserName" type="text" value="<?php echo $row['UserName'];?>">
        
              <label>Department ID</label>
              <input id="DepID" name="Dep_ID" type="text" value="<?php echo $row['Dep_ID'];?>">
        
              <label>Start Date</label>
              <input id="StartDate" name="StartDate" type="date" value="<?php echo $row['StartDate'];?>">

              <label>End Date</label>
              <input id="EndDate" name="EndDate" type="date" value="<?php echo $row['EndDate'];?>">

              <div class="text">
              <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Submit</button>
      </div>
            </form><br>
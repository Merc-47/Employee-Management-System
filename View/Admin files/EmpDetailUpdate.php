<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['Employee_ID'])){
  $EmployeeID=$_GET['Employee_ID'];
 
 
$sql="SELECT * FROM employee where Employee_ID='$EmployeeID'";
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
  if(isset($_GET['Employee_ID'])){
  $UPEmployeeID=$_GET['Employee_ID'];
  }
$EmpID=$_POST['Employee_ID'];
$FName=$_POST['FirstName'];
$LName=$_POST['LastName'];
$DepID=$_POST['Dep_ID'];
$DepName=$_POST['Dep_Name'];
$DOB=$_POST['DOB'];
$Gender=$_POST['Gender'];
$PhoneNo=$_POST['PhoneNo'];
$Email=$_POST['Email'];
$JobTitle=$_POST['JobTitle'];
$Address=$_POST['Address'];
$HireDate=$_POST['HireDate'];
$Salary=$_POST['Salary'];
  
$sql="UPDATE employee SET Employee_ID='$EmpID',FirstName='$FName',LastName='$LName',Dep_ID='$DepID'
,Dep_Name='$DepName',DOB='$DOB',Gender='$Gender',PhoneNo='$PhoneNo',Email='$Email',JobTitle='$JobTitle'
,Address='$Address',HireDate='$HireDate',Salary='$Salary' WHERE Employee_ID='$UPEmployeeID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:EmployeeDetails.php?update_msg=Successfully updated!');
}

}
?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
<div class="well">
              <div class="text">
              <h1>Update Employees</h1>
            </div>
            </div>
      <form class="form1" action="EmpDetailUpdate.php?Employee_ID=<?php echo $EmployeeID;?>" method="post" >
      
      <label>Employee ID</label>
        <input id="Employee_ID" name="Employee_ID" type="text" value="<?php echo $row['Employee_ID'];?>">

        <label>First Name</label>
        <input id="FirstName" name="FirstName" type="text" value="<?php echo $row['FirstName'];?>">
  
        <label>Last Name</label>
        <input id="LastName" name="LastName" type="text" value="<?php echo $row['LastName'];?>">
  
        <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text" value="<?php echo $row['Dep_ID'];?>">

        <label>Department Name</label>
        <input id="DepName" name="Dep_Name" type="text" value="<?php echo $row['Dep_Name'];?>">

        <label>DOB</label>
        <input id="DOB" name="DOB" type="date" value="<?php echo $row['DOB'];?>">
  
        <label >Gender</label>
        <input id="Gender" name="Gender"  type="text" value="<?php echo $row['Gender'];?>">
  
        <label>Phone No:</label>
        <input id="PhoneNo" name="PhoneNo" type="text" value="<?php echo $row['PhoneNo'];?>">

        <label>Email</label>
        <input id="Email" name="Email" type="email" value="<?php echo $row['Email'];?>">
  
        <label>Job Title</label>
        <input id="JobTitle" name="JobTitle" type="text" value="<?php echo $row['JobTitle'];?>">
  
        <label >Address</label>
        <input id="Address" name="Address"  type="text" value="<?php echo $row['Address'];?>">
  
        <label>Hire Date</label>
        <input id="HireDate" name="HireDate" type="text" value="<?php echo $row['HireDate'];?>">

        <label>Salary</label>
        <input id="Salary" name="Salary" type="text" value="<?php echo $row['Salary'];?>">

        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Submit</button>
      </div>
      </form>
<br><br><br>
</body>
</html>
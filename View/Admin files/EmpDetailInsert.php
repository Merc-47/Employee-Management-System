<?php include('dbConnection.php');?>

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
  
$sql="INSERT into employee (Employee_ID,FirstName,LastName,Dep_ID,Dep_Name,DOB,Gender,PhoneNo,Email,JobTitle
,Address,HireDate,Salary) Values ('$EmpID','$FName','$LName','$DepID','$DepName','$DOB','$Gender','$PhoneNo'
,'$Email','$JobTitle','$Address','$HireDate','$Salary')";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:EmployeeDetails.php?insert_msg=Data has been successfully Inserted!');
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
<div class="well">
              <div class="text">
              <h1>Add new Employees</h1>
            </div>
            </div>
      <form class="form1" action="EmpDetailInsert.php" method="post" >
      
      <label>Employee ID</label>
        <input id="Employee_ID" name="Employee_ID" type="text">

        <label>First Name</label>
        <input id="FirstName" name="FirstName" type="text" >
  
        <label>Last Name</label>
        <input id="LastName" name="LastName" type="text" >
  
        <label>Department ID</label>
        <input id="DepID" name="Dep_ID" type="text">

        <label>Department Name</label>
        <input id="DepName" name="Dep_Name" type="text" >

        <label>DOB</label>
        <input id="DOB" name="DOB" type="date" >
  
        <label >Gender</label>
        <input id="Gender" name="Gender"  type="text">
  
        <label>Phone No:</label>
        <input id="PhoneNo" name="PhoneNo" type="text" >

        <label>Email</label>
        <input id="Email" name="Email" type="email" >
  
        <label>Job Title</label>
        <input id="JobTitle" name="JobTitle" type="text" >
  
        <label >Address</label>
        <input id="Address" name="Address"  type="text" >
  
        <label>Hire Date</label>
        <input id="HireDate" name="HireDate" type="date" >

        <label>Salary</label>
        <input id="Salary" name="Salary" type="text" >

        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Submit</button>
      </div>
      </form>
<br><br><br>
</body>
</html>
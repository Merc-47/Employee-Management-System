<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['Payroll_ID'])){
    $PayrollID=$_GET['Payroll_ID'];
 
 
$sql="SELECT Emp_ID,Dep_ID,Wage,Allowance,Deductions,Taxes,WorkHours,Salary FROM payroll where Payroll_ID='$PayrollID'";
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
if(isset($_GET['Payroll_ID'])){
    $UPPayrollID=$_GET['Payroll_ID'];
}
$EmpID= $_POST['Emp_ID'];
$DepID= $_POST['Dep_ID'];
$Wage= $_POST['Wage'];
$Allowance= $_POST['Allowance'];
$Deductions= $_POST['Deductions'];
$Taxes= $_POST['Taxes'];
$WorkHours= $_POST['WorkHours'];
$Salary= $_POST['Salary'];

$sql="UPDATE payroll SET Emp_ID='$EmpID',Dep_ID='$DepID',Wage='$Wage',Allowance='$Allowance'
,Deductions='$Deductions',Taxes='$Taxes',WorkHours='$WorkHours',Salary='$Salary' WHERE Payroll_ID='$UPPayrollID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:Payroll.php?update_msg=Successfully updated!');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
<div class="well">
<div class="text">
        <h1>Update Payroll</h1>
      </div></div>
              <div class="regform">
      <form class="form1" action="PayrollUpdate.php?Payroll_ID=<?php echo $PayrollID;?>" method="post">
  
        <label>Emp ID</label>
        <input id="EmpID" name="Emp_ID" type="text" value="<?php echo $row['Emp_ID'];?>">
  
        <label>Dep ID</label>
        <input id="DepID" name="Dep_ID" type="text" value="<?php echo $row['Dep_ID'];?>">

        <label>Wage</label>
        <input id="Wage" name="Wage" type="text" value="<?php echo $row['Wage'];?>">
  
        <label>Allowance</label>
        <input id="Allowance" name="Allowance" type="text" value="<?php echo $row['Allowance'];?>">
  
        <label>Deductions</label>
        <input id="Deductions" name="Deductions" type="text" value="<?php echo $row['Deductions'];?>">

        <label>Taxes</label>
        <input id="Taxes" name="Taxes" type="text" value="<?php echo $row['Taxes'];?>">
  
        <label>Work Hours</label>
        <input id="WorkHours" name="WorkHours" type="text" value="<?php echo $row['WorkHours'];?>">

        <label>Salary</label>
        <input id="Salary" name="Salary" type="text" value="<?php echo $row['Salary'];?>">
  
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Submit</button>
          </div>
      </form>
      </div>
</body>
</html>
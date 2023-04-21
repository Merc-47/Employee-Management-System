<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['Attendance_ID'])){
  $AttendID=$_GET['Attendance_ID'];
 
 
$sql="SELECT Emp_ID,Date,Check_IN,Check_OUT FROM attendance where Attendance_ID='$AttendID'";
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
  if(isset($_GET['Attendance_ID'])){
  $UPAttendID=$_GET['Attendance_ID'];
  }

$Date=$_POST['Date'];
$CheckIN=$_POST['Check_IN'];
$CheckOUT=$_POST['Check_OUT'];
  
$sql="UPDATE attendance SET Date='$Date',Check_IN='$CheckIN',Check_OUT='$CheckOUT' WHERE Attendance_ID='$UPAttendID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:AttendanceManagement.php?update_msg=Successfully updated!');
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Attendance</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Update Attendance</h1>
      </div>
      </div>
      
        <div class="regform">
      <form class="form1" action="AttendanceUpdate.php?Attendance_ID=<?php echo $AttendID;?>" Method="post">
  
        <label>Employee ID</label>
        <input id="EmpID" name="Emp_ID" type="text" value="<?php echo $row['Emp_ID'];?>">
  
        <label>Date</label>
        <input id="Date" name="Date" type="date" value="<?php echo $row['Date'];?>">
  
        <label>Check In</label>
        <input id="CheckIN" name="Check_IN" type="time" value="<?php echo $row['Check_IN'];?>">
  
        <label>Check Out</label>
        <input id="CheckOUT" name="Check_OUT" type="time" value="<?php echo $row['Check_OUT'];?>">
  
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Insert</button>
          </div>
      </form>
      </div>
</body>
</html>
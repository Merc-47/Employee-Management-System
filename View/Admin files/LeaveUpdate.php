<?php include('dbConnection.php');?>
<?php 
 if(isset($_GET['Leave_ID'])){
  $LeaveID=$_GET['Leave_ID'];
 
 
$sql="SELECT Emp_ID,Type,Reason,DateTimeFrom,DateTimeTo FROM work_leave where Leave_ID='$LeaveID'";
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
  if(isset($_GET['Leave_ID'])){
  $UPLeaveID=$_GET['Leave_ID'];
  }

$Type=$_POST['Type'];
$Reason=$_POST['Reason'];
$DateTimeFrom=$_POST['DateTimeFrom'];
$DateTimeTo=$_POST['DateTimeTo'];
  
$sql="UPDATE work_leave SET Type='$Type',Reason='$Reason',DateTimeFrom='$DateTimeFrom,DateTimeTo=$DateTimeTo'
 WHERE Leave_ID='$UPLeaveID'";
$result=mysqli_query($conn,$sql);
if(!$result){
    die("query failed".mysqli_error($conn));
}else{
  header('location:LeaveManagement.php?update_msg=Successfully updated!');
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Leave Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Update Leave</h1>
      </div>
      </div>
      
        <div class="regform">
      <form class="form1" action="LeaveUpdate.php?Leave_ID=<?php echo $LeaveID;?>" Method="post">
  
      <label>Employee ID</label>
        <input id="EmpID" name="Emp_ID" type="text" value="<?php echo $row['Emp_ID'];?>">
  
        <label>Type</label>
        <Select name="Type" id="Type"  value="<?php echo $row['Type'];?>">
        <option value="Casual">Casual</option>
        <option value="Extended">Extended</option>
        </Select>

        <label>Reason</label>
        <textarea id="Reason" name="Reason"  value="<?php echo $row['Reason'];?>" rows="5" cols="50"></textarea>
  
        <label>Date/Time From</label>
        <input id="DateTimeFrom" name="DateTimeFrom" type="date"  value="<?php echo $row['DateTimeFrom'];?>">
  
        <label>Date/Time To</label>
        <input id="DateTimeTo" name="DateTimeTo" type="date"  value="<?php echo $row['DateTimeTo'];?>">
  
        <div class="text">
        <button id="Update_EMP"  name="Update_EMP" type="submit" value="UPDATE">Insert</button>
          </div>
      </form>
      </div>
</body>
</html>
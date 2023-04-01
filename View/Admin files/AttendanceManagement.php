<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Attendance Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Attendance Management</h1>
      </div>
      </div>
      
      <table>
      <tr>
          <th>Attendance_ID</th>
          <th>Emp_ID</th>
          <th>Date</th>
          <th>Check_IN</th>
          <th>Check_OUT</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php include('dbConnection.php');?>
        <?php
       $sql="SELECT * FROM attendance";
       
       $result=mysqli_query($conn,$sql);
       if(!$result){
           die("retreiving failed".mysqli_error($conn));
       }

       else{
           while($row=mysqli_fetch_assoc($result)){
                 ?>
           <tr>
                 <td><?php echo $row['Attendance_ID'];?></td>
                 <td><?php echo $row['Emp_ID'];?></td>
                 <td><?php echo $row['Date'];?></td>
                 <td><?php echo $row['Check_IN'];?></td>
                 <td><?php echo $row['Check_OUT'];?></td>
                 <td><a href="AttendanceUpdate.php?Attendance_ID=<?php echo $row['Attendance_ID'];?>">Update</a></td>
                 <td><a href="AttendanceDelete.php?Attendance_ID=<?php echo $row['Attendance_ID'];?>" >Delete</a></td>
                
           </tr>
           <?php
           }
     }
        ?>
              </table><br>
              <center>
<?php 
if(isset($_GET['update_msg'])){
echo"<h4>".$_GET['update_msg']."</h4>";
}
if(isset($_GET['delete_msg'])){
    echo"<h4>".$_GET['delete_msg']."</h4>";
    }
   
?>
    </center>
              
</body>
</html>
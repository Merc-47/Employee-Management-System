<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Leave Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <div class="well">
        <div class="text">
        <h1>Leave Management</h1>
      </div>
      </div>
      
      <table>
      <tr>
          <th>Leave_ID</th>
          <th>Emp_ID</th>
          <th>Type</th>
          <th>Reason</th>
          <th>Date/TimeFrom</th>
          <th>Date/TimeTo</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php include('dbConnection.php');?>
        <?php
       $sql="SELECT * FROM work_leave";
       
       $result=mysqli_query($conn,$sql);
       if(!$result){
           die("retreiving failed".mysqli_error($conn));
       }

       else{
           while($row=mysqli_fetch_assoc($result)){
                 ?>
           <tr>
                 <td><?php echo $row['Leave_ID'];?></td>
                 <td><?php echo $row['Emp_ID'];?></td>
                 <td><?php echo $row['Type'];?></td>
                 <td><?php echo $row['Reason'];?></td>
                 <td><?php echo $row['DateTimeFrom'];?></td>
                 <td><?php echo $row['DateTimeTo'];?></td>
                 <td><a href="LeaveUpdate.php?Leave_ID=<?php echo $row['Leave_ID'];?>">Update</a></td>
                 <td><a href="LeaveDelete.php?Leave_ID=<?php echo $row['Leave_ID'];?>" >Delete</a></td>
                
           </tr>
           <?php
           }
     }
        ?>
       
              </table><br>
              <center>
      <?php
       if(isset($_GET['delete_msg'])){
        echo"<h4>".$_GET['delete_msg']."</h4>";
        }
        if(isset($_GET['update_msg'])){
            echo"<h4>".$_GET['update_msg']."</h4>";
            }
      ?>
      </center> <br><br><br>
             
</body>
</html>